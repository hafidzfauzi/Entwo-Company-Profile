<nav class="bg-primary text-white shadow-md fixed w-full z-50">
    <div class="w-full px-8 py-4 flex justify-between items-center">
        <a href="/" class="flex items-center space-x-3">
            <img src="{{ Vite::asset('resources/images/Logo Entwo.png') }}" alt="Logo" class="h-10 w-auto">
            <span class="text-2xl font-bold tracking-wider">ENTWO</span>
        </a>

        <!-- Menu Desktop -->
        <div class="hidden md:flex space-x-8 items-center">
            <a href="/" class="hover:text-secondary transition font-medium">Home</a>
            <a href="/about" class="hover:text-secondary transition font-medium">About</a>
            <a href="/service" class="hover:text-secondary transition font-medium">Service</a>
            <a href="/portfolio" class="hover:text-secondary transition font-medium">Portfolio</a>
            <a href="/contact" class="hover:text-secondary transition font-medium">Contact</a>
        </div>

        <!-- Hamburger Button -->
        <button id="menu-btn" class="md:hidden relative z-50 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
        <a href="/" class="block py-2">Home</a>
        <a href="/about" class="block py-2">About</a>
        <a href="/service" class="block py-2">Service</a>
        <a href="/portfolio" class="block py-2">Portfolio</a>
        <a href="/contact" class="block py-2">Contact</a>
    </div>
</nav>
