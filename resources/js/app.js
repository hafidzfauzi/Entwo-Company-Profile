import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', () => {
    // 1. Inisialisasi AOS
    AOS.init({
        duration: 800,    // Durasi animasi (dalam milidetik)
        easing: 'ease-out-cubic', // Gaya animasi biar smooth
        once: false,        // PENTING: Ubah ke false agar animasi berulang tiap scroll!
        mirror: true,       // Animasi juga jalan saat discroll ke atas (kembali)
        offset: 50,       // Jarak elemen dari bawah layar sebelum animasi mulai
        startEvent: 'DOMContentLoaded', // Event yang memicu inisialisasi AOS
    });

    // 2. Logic Smooth Scroll ke ID (Vanilla JS)
    // Berlaku untuk semua tag <a> yang href-nya dimulai dengan "#"
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            // Hindari error jika href cuma "#"
            if (this.getAttribute('href') === '#') return;

            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Ambil tinggi navbar agar judul section tidak tertutup
                const navbarHeight = document.getElementById('navbar').offsetHeight;

                // Hitung posisi elemen target dari atas halaman, kurangi tinggi navbar
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;

                window.scrollTo({
                    top: targetPosition - navbarHeight,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ... (logic smooth scroll sebelumnya) ...

    // --- LOGIC SCROLLSPY & SMOOTH SCROLL ---
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    const indicator = document.getElementById('nav-indicator');

    // Variabel pintar untuk mengontrol status scroll
    let isClickScrolling = false;
    let scrollTimeout;

    function updateScrollSpy() {
        let currentSection = '';
        const scrollPosition = window.scrollY + 200; // Margin diperbesar sedikit agar lebih responsif

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                currentSection = sectionId;
            }
        });

        // FIX BUG: Deteksi jika layar sudah scroll mentok ke paling bawah
        // Paksa sistem untuk mengaktifkan section paling terakhir (Contact)
        if ((window.innerHeight + Math.round(window.scrollY)) >= document.body.offsetHeight - 50) {
            const lastSection = sections[sections.length - 1];
            if (lastSection) {
                currentSection = lastSection.getAttribute('id');
            }
        }

        // Jalankan transisi garis dan warna teks
        navLinks.forEach(link => {
            link.classList.remove('text-secondary', 'drop-shadow-[0_0_10px_rgba(56,189,248,0.8)]');
            link.classList.add('text-slate-300');
            link.classList.remove('border-secondary');

            if (link.getAttribute('href') === `#${currentSection}`) {
                link.classList.remove('text-slate-300');
                link.classList.add('text-secondary', 'drop-shadow-[0_0_10px_rgba(56,189,248,0.8)]');

                if (indicator && link.closest('#desktop-menu')) {
                    const linkWidth = link.offsetWidth;
                    const linkLeft = link.offsetLeft;
                    indicator.style.width = `${linkWidth}px`;
                    indicator.style.transform = `translateX(${linkLeft}px)`;
                    indicator.style.opacity = '1';
                } else if (!link.closest('#desktop-menu')) {
                    link.classList.add('border-secondary');
                }
            }
        });

        // Sembunyikan garis jika berada di Hero paling atas
        if (window.scrollY < 50 && indicator) {
             indicator.style.opacity = '0';
        }
    }

    // Listener Scroll yang lebih pintar
    window.addEventListener('scroll', () => {
        if (isClickScrolling) {
            // Jika layar bergerak karena diklik, abaikan ScrollSpy dan reset timer
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                // Begitu layar berhenti selama 100ms, matikan status klik
                isClickScrolling = false;
                updateScrollSpy();
            }, 100);
            return;
        }
        updateScrollSpy(); // Jalankan normal jika di-scroll pakai mouse
    });

    window.addEventListener('load', updateScrollSpy);
    window.addEventListener('resize', updateScrollSpy);

    // --- LOGIC KLIK MENU (Smooth Scroll ke ID) ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            if (this.getAttribute('href') === '#') return;
            e.preventDefault();

            // NYALAKAN SAKLAR KLIK
            isClickScrolling = true;
            clearTimeout(scrollTimeout); // Bersihkan sisa timer

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            // PAKSA PINDAHKAN GARIS LANGSUNG KE MENU YANG DIKLIK
            navLinks.forEach(link => {
                link.classList.remove('text-secondary', 'drop-shadow-[0_0_10px_rgba(56,189,248,0.8)]');
                link.classList.add('text-slate-300');
                link.classList.remove('border-secondary');
            });

            this.classList.remove('text-slate-300');
            this.classList.add('text-secondary', 'drop-shadow-[0_0_10px_rgba(56,189,248,0.8)]');

            if (indicator && this.closest('#desktop-menu')) {
                const linkWidth = this.offsetWidth;
                const linkLeft = this.offsetLeft;
                indicator.style.width = `${linkWidth}px`;
                indicator.style.transform = `translateX(${linkLeft}px)`;
                indicator.style.opacity = '1';
            } else if (!this.closest('#desktop-menu')) {
                this.classList.add('border-secondary');
            }

            // LAKUKAN SMOOTH SCROLL
            if (targetElement) {
                const navbarHeight = document.getElementById('navbar').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;

                window.scrollTo({
                    top: targetPosition - navbarHeight,
                    behavior: 'smooth'
                });
            }
        });
    });

    // 3. Logic Navbar Mobile
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuBtn) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // 4. Logic Scroll To Top
    const navbar = document.getElementById('navbar'); // Dideklarasikan di luar event listener

    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                // Saat scroll ke bawah: Background transparan gelap + Blur pekat
                navbar.classList.add('bg-primary/70', 'backdrop-blur-xl', 'shadow-2xl', 'py-3');
                navbar.classList.remove('bg-transparent', 'py-5');
            } else {
                // Saat di paling atas: Benar-benar transparan
                navbar.classList.remove('bg-primary/70', 'backdrop-blur-xl', 'shadow-2xl', 'py-3');
                navbar.classList.add('bg-transparent', 'py-5');
            }
        });
    }

    // 5. Logic Hero Swiper
    const swiperElement = document.querySelector('.hero-swiper');

    if (swiperElement) {
        const heroSwiper = new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true,
            },
        });
    }
});
