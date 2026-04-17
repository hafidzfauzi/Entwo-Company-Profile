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
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            // Saat di-scroll ke bawah
            navbar.classList.remove('bg-transparent', 'py-4');
            navbar.classList.add('bg-primary/70', 'backdrop-blur-md', 'shadow-lg', 'py-2');
        } else {
            // Saat kembali ke paling atas (Home)
            navbar.classList.remove('bg-primary/90', 'backdrop-blur-md', 'shadow-lg', 'py-2');
            navbar.classList.add('bg-transparent', 'py-4');
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
