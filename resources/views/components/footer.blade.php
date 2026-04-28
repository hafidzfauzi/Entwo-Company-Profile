<footer class="relative z-10 bg-primary text-white pt-20 border-t border-slate-800 w-full overflow-hidden">

    {{-- Efek Glow Tipis di Dasar Footer --}}
    <div class="absolute bottom-0 left-1/2 w-[600px] h-[300px] bg-secondary/5 rounded-full blur-[120px] -translate-x-1/2 pointer-events-none"></div>

    {{-- Kontainer Konten Utama --}}
    <div class="relative max-w-7xl mx-auto px-6 pb-12 z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 text-left">

            {{-- Kolom 1: Branding --}}
            <div class="space-y-6" data-aos="fade-up" data-aos-delay="100">
               <a href="/" class="flex items-center space-x-3">
                    <img src="{{ asset('images/Logo Entwo.png') }}" alt="Entwo Logo" class="h-10 md:h-12 w-auto">
                    <span class="text-2xl md:text-3xl font-black tracking-wider uppercase italic">ENTWO</span>
                </a>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Pioneer in general contracting, supply, automation, and maintenance. Providing reliable high-quality solutions for modern industries.
                </p>
            </div>

            {{-- Kolom 2: Navigation --}}
            <div data-aos="fade-up" data-aos-delay="200" class="lg:col-span-1">
                {{-- Garis bawah mengikuti lebar kolom di desktop, fit di mobile --}}
                <h4 class="text-lg font-bold mb-6 border-b-2 border-secondary pb-2 w-fit md:w-full md:max-w-[200px]">
                    Navigation
                </h4>

                <ul class="grid grid-cols-2 gap-x-4 gap-y-4 text-slate-400 text-sm">
                    <li><a href="/#hero" class="inline-block hover:text-secondary hover:translate-x-2 transition-all duration-300">Home</a></li>
                    <li><a href="/about" class="inline-block hover:text-secondary hover:translate-x-2 transition-all duration-300">About Us</a></li>
                    <li><a href="/#service" class="inline-block hover:text-secondary hover:translate-x-2 transition-all duration-300">Services</a></li>
                    <li><a href="/#portfolio" class="inline-block hover:text-secondary hover:translate-x-2 transition-all duration-300">Portfolio</a></li>
                    <li><a href="/#products" class="inline-block hover:text-secondary hover:translate-x-2 transition-all duration-300">Products</a></li>
                    <li><a href="/#contact" class="inline-block hover:text-secondary hover:translate-x-2 transition-all duration-300">Contact</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Services --}}
            <div data-aos="fade-up" data-aos-delay="300">
                <h4 class="text-lg font-bold mb-6 border-b-2 border-secondary w-fit pb-2">Our Services</h4>
                <ul class="space-y-4 text-slate-400 text-sm">
                    <li class="flex items-center space-x-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary shadow-[0_0_8px_rgba(56,189,248,0.8)]"></span>
                        <span>General Contractor</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary shadow-[0_0_8px_rgba(56,189,248,0.8)]"></span>
                        <span>System Integrator</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary shadow-[0_0_8px_rgba(56,189,248,0.8)]"></span>
                        <span>Supply Services</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary shadow-[0_0_8px_rgba(56,189,248,0.8)]"></span>
                        <span>Engineering & Maintenance</span>
                    </li>
                </ul>
            </div>

            {{-- Kolom 4: Contact --}}
            <div data-aos="fade-up" data-aos-delay="400">
                <h4 class="text-lg font-bold mb-6 border-b-2 border-secondary w-fit pb-2">Contact Us</h4>
                <ul class="space-y-4 text-slate-400 text-sm">
                    <li class="flex items-start space-x-4">
                        <span class="text-secondary text-lg">📍</span>
                        <span class="leading-relaxed">Jl. Lengkong No 160 RT 03/13 Cilacap, Jawa Tengah, Indonesia</span>
                    </li>
                    <li class="flex items-start space-x-4">
                        <span class="text-secondary text-lg">📧</span>
                        <a href="mailto:office@entwo.co.id" class="hover:text-secondary transition-colors duration-300">office@entwo.co.id</a>
                    </li>
                    <li class="flex items-start space-x-4">
                        <span class="text-secondary text-lg">📞</span>
                        <span class="hover:text-secondary transition-colors duration-300">(0282) 5561812</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom Footer --}}
    <div class="relative z-10 py-6 border-t border-slate-800 text-center bg-slate-900/50 backdrop-blur-sm">
         <p class="text-slate-500 text-[10px] md:text-xs tracking-widest uppercase font-bold">
            &copy; {{ date('Y') }} Entwo Group. All rights reserved.
        </p>
    </div>
</footer>
