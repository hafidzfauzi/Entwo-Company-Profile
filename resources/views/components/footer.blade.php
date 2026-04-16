<footer class="bg-primary text-white pt-16 border-t border-slate-800 w-full">
    {{-- Kontainer Konten Utama --}}
    <div class="max-w-7xl mx-auto px-6 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-left">
            {{-- Kolom 1: Branding --}}
            <div class="space-y-6">
               <a href="/" class="items-center space-x-3 text-2xl font-bold flex">
                    <img src="{{ Vite::asset('resources/images/Logo Entwo.png') }}" alt="Entwo Logo" class="h-10 w-auto">
                    <span class="text-2xl font-bold tracking-tight">Entwo</span>
                </a>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Providing innovative IT solutions and digital transformation to help businesses grow in the modern era.
                </p>
            </div>

            {{-- Kolom 2: Navigation --}}
            <div>
                <h4 class="text-lg font-semibold mb-6 border-b-2 border-secondary w-fit">Navigation</h4>
                <ul class="space-y-4 text-slate-400 text-sm">
                    <li><a href="/" class="hover:text-secondary transition-colors duration-300">Home</a></li>
                    <li><a href="/service" class="hover:text-secondary transition-colors duration-300">Service</a></li>
                    <li><a href="/about" class="hover:text-secondary transition-colors duration-300">About Us</a></li>
                    <li><a href="/contact" class="hover:text-secondary transition-colors duration-300">Contact</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Services --}}
            <div>
                <h4 class="text-lg font-semibold mb-6 border-b-2 border-secondary w-fit">Our Services</h4>
                <ul class="space-y-4 text-slate-400 text-sm">
                    <li><a href="#" class="hover:text-secondary transition-colors duration-300">General Contractor</a></li>
                    <li><a href="#" class="hover:text-secondary transition-colors duration-300">System Integrator</a></li>
                    <li><a href="#" class="hover:text-secondary transition-colors duration-300">Supply Services</a></li>
                    <li><a href="#" class="hover:text-secondary transition-colors duration-300">Engineering & Maintenance</a></li>
                </ul>
            </div>

            {{-- Kolom 4: Contact --}}
            <div>
                <h4 class="text-lg font-semibold mb-6 border-b-2 border-secondary w-fit">Contact Us</h4>
                <ul class="space-y-4 text-slate-400 text-sm">
                    <li class="flex items-start space-x-4"><span class="text-secondary">📍</span> <span> Jl. Lengkong No 160 RT 03/13 Cilacap, Jawa Tengah, Indonesia</span></li>
                    <li class="flex items-start space-x-4"><span class="text-secondary">📧</span> <span> (0282) 5561812</span></li>
                    <li class="flex items-start space-x-4"><span class="text-secondary">📞</span> <span> office@entwo.co.id</span></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom Footer --}}
    <div class="mt-0 py-4 border-t border-slate-800 text-center bg-primary">
         <p class="text-slate-500 text-[10px] md:text-xs tracking-widest uppercase">
            &copy; {{ date('Y') }} Entwo Group. All rights reserved.
        </p>
    </div>
</footer>
