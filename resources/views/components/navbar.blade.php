<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 text-white bg-transparent">
    <div class="w-full px-8 py-4 flex justify-between items-center">
        <a href="/" class="flex items-center space-x-3">
            <img src="{{ Vite::asset('resources/images/Logo Entwo.png') }}" alt="Logo" class="h-10 w-auto">
            <span class="text-2xl font-bold tracking-wider">ENTWO</span>
        </a>

        <div class="hidden md:flex space-x-8 items-center">
            <a href="#hero" class="hover:text-secondary transition font-medium">Home</a>
            <a href="#about" class="hover:text-secondary transition font-medium">About Us</a>
            <a href="#service" class="hover:text-secondary transition font-medium">Services</a>
            <a href="#portfolio" class="hover:text-secondary transition font-medium">Portfolio</a>
            <a href="#contact" class="hover:text-secondary transition font-medium">Contact</a>
        </div>

        <button id="menu-btn" class="md:hidden relative z-50 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-primary/90 backdrop-blur-2xl border-b border-white/10 px-8 py-10 shadow-2xl">
        <a href="#hero" class="block py-2">Home</a>
        <a href="#about" class="block py-2">About Us</a>
        <a href="#service" class="block py-2 border-t border-white/10 pt-2">Services</a>
        <a href="#portfolio" class="block py-2">Portfolio</a>
        <a href="#contact" class="block py-2">Contact</a>
    </div>
</nav>
