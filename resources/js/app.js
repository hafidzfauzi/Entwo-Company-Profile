import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

document.addEventListener('DOMContentLoaded', () => {
    // Logic Navbar Mobile
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuBtn) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
    // Logic Scroll To Top
    window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 20) {
        // Saat scroll ke bawah: Background transparan gelap + Blur pekat
        navbar.classList.add('bg-primary/70', 'backdrop-blur-xl', 'shadow-2xl', 'py-3');
        navbar.classList.remove('bg-transparent', 'py-5');
    } else {
        // Saat di paling atas: Benar-benar transparan (atau blur tipis jika mau)
        navbar.classList.remove('bg-primary/70', 'backdrop-blur-xl', 'shadow-2xl', 'py-3');
        navbar.classList.add('bg-transparent', 'py-5');
    }
});
    // Logic Hero Swiper
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
