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