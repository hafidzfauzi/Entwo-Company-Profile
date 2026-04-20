{{-- Navbar Alpine.js --}}
<nav id="navbar" 
     x-data="{ atTop: true, mobileMenu: false }" 
     @scroll.window="atTop = (window.pageYOffset > 20 ? false : true)"
     :class="{ 'bg-transparent py-6 md:py-8': atTop && !mobileMenu, 'bg-primary/80 backdrop-blur-xl shadow-2xl py-4': !atTop || mobileMenu }"
     class="fixed top-0 left-0 w-full z-[1000] transition-all duration-500 ease-in-out text-white box-border">
    
    <div class="max-w-[1440px] mx-auto px-6 md:px-12 lg:px-16 flex justify-between items-center">
        
        {{-- Logo --}}
        <a href="/" class="flex items-center space-x-3 md:space-x-4">
            <img src="{{ Vite::asset('resources/images/Logo Entwo.png') }}" alt="Logo" class="h-10 md:h-12 lg:h-14 w-auto transition-transform duration-300 hover:scale-105">
            <span class="text-2xl md:text-3xl font-black tracking-wider">ENTWO</span>
        </a>

        {{-- Desktop Menu --}}
        <div class="hidden md:flex space-x-8 lg:space-x-12 items-center">
            <a href="#hero" @click="mobileMenu = false" class="md:text-lg hover:text-secondary transition font-medium">Home</a>
            <a href="#about" @click="mobileMenu = false" class="md:text-lg hover:text-secondary transition font-medium">About Us</a>
            <a href="#service" @click="mobileMenu = false" class="md:text-lg hover:text-secondary transition font-medium">Services</a>
            <a href="#portfolio" @click="mobileMenu = false" class="md:text-lg hover:text-secondary transition font-medium">Portfolio</a>
            
            {{-- MENU BARU: Products (Ditambahkan setelah Portfolio) --}}
            <a href="#products" @click="mobileMenu = false" class="md:text-lg hover:text-secondary transition font-medium">Products</a>
            
            <a href="#contact" @click="mobileMenu = false" class="md:text-lg hover:text-secondary transition font-medium">Contact</a>
        </div>

        {{-- Hamburger Button --}}
        <button @click="mobileMenu = !mobileMenu" class="md:hidden relative z-[1001] focus:outline-none p-2 text-white">
            <svg x-show="!mobileMenu" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="mobileMenu" style="display: none;" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Mobile Menu Overlay --}}
    <div x-show="mobileMenu" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-10"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-10"
         style="display: none;"
         class="absolute top-full left-0 w-full bg-primary/95 backdrop-blur-xl border-b border-white/10 px-8 py-8 shadow-2xl md:hidden">
        
        <div class="flex flex-col space-y-6">
            <a href="#hero" @click="mobileMenu = false" class="text-xl font-medium text-slate-300 hover:text-secondary">Home</a>
            <a href="#about" @click="mobileMenu = false" class="text-xl font-medium text-slate-300 hover:text-secondary">About Us</a>
            <a href="#service" @click="mobileMenu = false" class="text-xl font-medium text-slate-300 hover:text-secondary">Services</a>
            <a href="#portfolio" @click="mobileMenu = false" class="text-xl font-medium text-slate-300 hover:text-secondary">Portfolio</a>
            
            {{-- MENU BARU: Products untuk Mobile Menu --}}
            <a href="#products" @click="mobileMenu = false" class="text-xl font-medium text-slate-300 hover:text-secondary">Products</a>
            
            <a href="#contact" @click="mobileMenu = false" class="text-xl font-medium text-slate-300 hover:text-secondary">Contact</a>
        </div>
    </div>
</nav>