@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section id="hero" class="relative h-screen w-full overflow-hidden bg-primary">

    {{-- Slider Background --}}
    <div class="swiper hero-swiper absolute inset-0 w-full h-full z-0">
        <div class="swiper-wrapper">
            {{-- Slide 1 --}}
            <div class="swiper-slide relative h-full w-full">
                {{-- Overlay per slide agar gambar apapun tetap gelap --}}
                <div class="absolute inset-0 bg-black/60 md:bg-black/40 z-10"></div>
                <img src="{{ Vite::asset('resources/images/logo entwo group.png') }}"
                    alt="Entwo Group"
                    class="w-full h-full object-cover block">
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide relative h-full w-full">
                <div class="absolute inset-0 bg-black/60 md:bg-black/40 z-10"></div>
                <img src="{{ Vite::asset('resources/images/Logo Entwo.png') }}"
                    alt="Entwo Group"
                    class="w-full h-full object-cover block">
            </div>

            {{-- Slide 3 --}}
            <div class="swiper-slide relative h-full w-full">
                <div class="absolute inset-0 bg-black/60 md:bg-black/40 z-10"></div>
                <img src="{{ Vite::asset('resources/images/img2.jpeg') }}"
                    alt="Entwo Group"
                    class="w-full h-full object-cover block">
            </div>
        </div>

        {{-- Pagination --}}
        <div class="swiper-pagination"></div>
    </div>

    {{-- Konten Teks (Floating di atas Slider) --}}
    <div class="absolute inset-0 z-20 flex flex-col items-center justify-center px-6">
        <div class="text-center animate-fade-in">
            <h1 class="text-3xl md:text-6xl font-bold leading-tight text-white drop-shadow-lg">
                Welcome to <br><span class="text-secondary">Entwo Electronic & Engineering</span>
            </h1>
            <p class="mt-4 text-base md:text-lg text-slate-200 opacity-90 max-w-lg mx-auto drop-shadow-md">
                Innovative IT Solutions for Your Business
            </p>
        </div>
    </div>

</section>
{{-- About Us Section --}}
<section id="about" class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 animate-fade-in">
        <div class="flex flex-col lg:flex-row items-center gap-16">

            {{-- Left Column: Image with Decorative Elements --}}
            <div class="w-full lg:w-1/2 relative animate-fade-in">
                {{-- Decorative backgrounds --}}
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-secondary/10 rounded-full -z-10 animate-pulse"></div>
                <div class="absolute -bottom-10 -right-6 w-48 h-48 bg-primary/5 rounded-2xl -z-10 rotate-12"></div>

                {{-- Main Image --}}
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-8 border-white">
                    <img src="{{ Vite::asset('resources/images/img3.png') }}"
                         alt="ENTWO Engineering Excellence"
                         class="w-full h-[500px] object-cover hover:scale-105 transition duration-700">
                </div>

                {{-- Experience Badge --}}
                <div class="absolute -bottom-6 -left-6 bg-secondary p-8 rounded-2xl shadow-xl hidden md:block">
                    <p class="text-primary text-4xl font-black leading-none">13+</p>
                    <p class="text-primary/80 text-xs font-bold uppercase tracking-tighter">Years of Service</p>
                </div>
            </div>

            {{-- Right Column: Professional Copy --}}
            <div class="w-full lg:w-1/2 space-y-8">
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <span class="w-12 h-[2px] bg-secondary"></span>
                        <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-xs">Since 2013</h4>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                        Right at the heart of <span class="text-secondary underline decoration-primary/10 underline-offset-8">Innovation</span>
                    </h2>
                </div>

                <div class="space-y-6">
                    <p class="text-slate-600 leading-relaxed text-lg italic border-l-4 border-secondary pl-6">
                        "Embrace the future with ENTWO, where solutions meet excellence."
                    </p>

                    <p class="text-slate-600 leading-relaxed">
                        CV ENTWO Electronic & Engineering has been a pioneer in the general contracting, supply, automation and maintenance industry since its founding in 2013. Based in Cilacap, Central Java, Indonesia, we have set new standards in providing reliable high-quality solutions to various industries.
                    </p>

                    <p class="text-slate-600 leading-relaxed">
                        With a professional team committed to excellence, we have established a strong relationship as a trusted partner for our customers. Every step we take is driven by innovation, technical expertise and dedication to delivering the best.
                    </p>
                </div>

                {{-- Feature Grid --}}
                <div class="grid grid-cols-2 gap-6 pt-4">
                    <div class="group">
                        <div class="flex items-center space-x-3 mb-2">
                            <span class="text-secondary group-hover:scale-125 transition">⚡</span>
                            <h5 class="font-bold text-primary">Automation</h5>
                        </div>
                        <p class="text-xs text-slate-500">Industry-leading technical expertise.</p>
                    </div>
                    <div class="group">
                        <div class="flex items-center space-x-3 mb-2">
                            <span class="text-secondary group-hover:scale-125 transition">🛠️</span>
                            <h5 class="font-bold text-primary">Maintenance</h5>
                        </div>
                        <p class="text-xs text-slate-500">Dedicated to delivering the best.</p>
                    </div>
                </div>

                {{-- Action Button --}}
                <div class="pt-6">
                    <a href="/about" class="btn-primary flex items-center w-fit space-x-3 group">
                        <span>Learn More About Us</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-2 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- Services Section --}}
<section id="service" class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header Section --}}
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-sm">What We Offer</h4>
            <h2 class="text-3xl md:text-5xl font-bold text-primary">Comprehensive Solutions for Industry Needs</h2>
            <div class="w-20 h-1.5 bg-secondary mx-auto rounded-full"></div>
            <p class="text-slate-600 italic">"Providing reliable high-quality solutions to various industries."</p>
        </div>

        {{-- Services Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            {{-- Service 1: General Contractor --}}
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-14 h-14 bg-primary/5 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors">
                    <span class="text-3xl group-hover:scale-110 transition">🏗️</span>
                </div>
                <h3 class="text-xl font-bold text-primary mb-4">General Contractor</h3>
                <p class="text-slate-500 text-sm leading-relaxed">
                    Setting new standards in construction and project management with high-quality execution.
                </p>
            </div>

            {{-- Service 2: System Integrator --}}
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-14 h-14 bg-primary/5 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors">
                    <span class="text-3xl group-hover:scale-110 transition">⚙️</span>
                </div>
                <h3 class="text-xl font-bold text-primary mb-4">System Integrator</h3>
                <p class="text-slate-500 text-sm leading-relaxed">
                    Advanced automation and technical expertise to streamline your industrial operations.
                </p>
            </div>

            {{-- Service 3: Supply Services --}}
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-14 h-14 bg-primary/5 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors">
                    <span class="text-3xl group-hover:scale-110 transition">📦</span>
                </div>
                <h3 class="text-xl font-bold text-primary mb-4">Supply Services</h3>
                <p class="text-slate-500 text-sm leading-relaxed">
                    Trusted partner in providing high-quality industrial components and engineering supplies.
                </p>
            </div>

            {{-- Service 4: Engineering & Maintenance --}}
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-14 h-14 bg-primary/5 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors">
                    <span class="text-3xl group-hover:scale-110 transition">🛠️</span>
                </div>
                <h3 class="text-xl font-bold text-primary mb-4">Maintenance</h3>
                <p class="text-slate-500 text-sm leading-relaxed">
                    Dedicated maintenance services to ensure your machinery and systems run at peak performance.
                </p>
            </div>

        </div>
    </div>
</section>
{{-- Client Section - Tambahkan setelah Service --}}
<section class="py-12 bg-white border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-6">
        <p class="text-center text-slate-400 text-sm font-semibold uppercase tracking-widest mb-8">Trusted by Industry Leaders</p>
        <div class="flex flex-wrap justify-center items-center gap-12 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
            {{-- List Klien dari Compro --}}
            <span class="font-bold text-xl text-slate-400 italic">S2P (PLTU Cilacap)</span>
            <span class="font-bold text-xl text-slate-400 italic">D&C Engineering</span>
            <span class="font-bold text-xl text-slate-400 italic">Tria Dayatama</span>
            <span class="font-bold text-xl text-slate-400 italic">Gading Mas Utama</span>
        </div>
    </div>
</section>
{{-- Portfolio Section --}}
<section id="portfolio" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header: Dibuat simpel dan elegan --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div class="space-y-4">
                <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-sm">Our Works</h4>
                <h2 class="text-3xl md:text-5xl font-bold text-primary">Featured Projects</h2>
            </div>
            <p class="text-slate-500 max-w-md md:text-right">
                A showcase of our dedication to technical expertise and industrial excellence across Indonesia.
            </p>
        </div>

        {{-- Grid Portfolio --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Project 1 --}}
            <div class="group relative overflow-hidden rounded-2xl bg-primary aspect-[4/3]">
                <img src="{{ Vite::asset('resources/images/project1.jpg') }}"
                     class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:opacity-40">

                {{-- Konten yang muncul saat Hover --}}
                <div class="absolute inset-0 p-8 flex flex-col justify-end translate-y-8 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                    <span class="text-secondary text-sm font-bold mb-2 uppercase tracking-widest">Automation</span>
                    <h3 class="text-white text-2xl font-bold mb-4">Industrial System Integration</h3>
                    <a href="#" class="text-white flex items-center space-x-2 text-sm font-semibold hover:text-secondary">
                        <span>View Details</span>
                        <span class="text-lg">→</span>
                    </a>
                </div>
            </div>

            {{-- Project 2 --}}
            <div class="group relative overflow-hidden rounded-2xl bg-primary aspect-[4/3]">
                <img src="{{ Vite::asset('resources/images/project2.jpg') }}"
                     class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:opacity-40">

                <div class="absolute inset-0 p-8 flex flex-col justify-end translate-y-8 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                    <span class="text-secondary text-sm font-bold mb-2 uppercase tracking-widest">Construction</span>
                    <h3 class="text-white text-2xl font-bold mb-4">General Contracting Site</h3>
                    <a href="#" class="text-white flex items-center space-x-2 text-sm font-semibold hover:text-secondary">
                        <span>View Details</span>
                        <span class="text-lg">→</span>
                    </a>
                </div>
            </div>

            {{-- Project 3 --}}
            <div class="group relative overflow-hidden rounded-2xl bg-primary aspect-[4/3]">
                <img src="{{ Vite::asset('resources/images/project3.jpg') }}"
                     class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:opacity-40">

                <div class="absolute inset-0 p-8 flex flex-col justify-end translate-y-8 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                    <span class="text-secondary text-sm font-bold mb-2 uppercase tracking-widest">Maintenance</span>
                    <h3 class="text-white text-2xl font-bold mb-4">Routine Electrical Audits</h3>
                    <a href="#" class="text-white flex items-center space-x-2 text-sm font-semibold hover:text-secondary">
                        <span>View Details</span>
                        <span class="text-lg">→</span>
                    </a>
                </div>
            </div>

        </div>

        {{-- Button: Lihat Semua (Optional) --}}
        <div class="mt-16 text-center">
            <a href="/portfolio" class="inline-block px-8 py-4 border-2 border-primary text-primary font-bold rounded-full hover:bg-primary hover:text-white transition-all duration-300">
                Explore All Projects
            </a>
        </div>
    </div>
</section>
{{-- Product Section - Tambahkan setelah Portfolio --}}
<section id="products" class="py-24 bg-primary text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div>
                <h4 class="text-secondary font-bold tracking-widest uppercase text-sm">Our Innovations</h4>
                <h2 class="text-3xl md:text-5xl font-bold">Smart Industrial Solutions</h2>
            </div>
            <p class="text-slate-300 max-w-md md:text-right">
                Beyond services, we develop proprietary platforms to enhance your operational safety and efficiency.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Product: SHEguard --}}
            <div class="bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center text-primary text-3xl">🛡️</div>
                    <h3 class="text-2xl font-bold">SHEguard</h3>
                </div>
                <p class="text-slate-400 mb-6 leading-relaxed">
                    Designed to help companies manage and improve HSE aspects through risk control, incident reporting, and compliance monitoring.
                </p>
                <span class="text-secondary font-bold text-sm uppercase tracking-tighter">HSE Management Platform</span>
            </div>

            {{-- Product: Augmee --}}
            <div class="bg-white/5 p-8 rounded-3xl border border-white/10 hover:bg-white/10 transition">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center text-primary text-3xl">🕶️</div>
                    <h3 class="text-2xl font-bold">AUGMEE.ID</h3>
                </div>
                <p class="text-slate-400 mb-6 leading-relaxed">
                    Development of virtual solutions using AR and VR technology to enhance performance, productivity, and industrial competitiveness.
                </p>
                <span class="text-secondary font-bold text-sm uppercase tracking-tighter">AR/VR Solution Provider</span>
            </div>
        </div>
    </div>
</section>
{{-- Contact Section --}}
<section id="contact" class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="flex flex-col lg:flex-row gap-16">

            {{-- Bagian Kiri: Info Kontak --}}
            <div class="w-full lg:w-1/3 space-y-10">
                <div class="space-y-4">
                    <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-sm">Contact Us</h4>
                    <h2 class="text-3xl md:text-5xl font-bold text-primary">Let's Discuss Your Project</h2>
                    <p class="text-slate-600 leading-relaxed">
                        Ready to innovate with us? Reach out through any of these channels or fill out the form.
                    </p>
                </div>

                <div class="space-y-6">
                    {{-- Alamat --}}
                    <div class="flex items-start space-x-5 group">
                        <div class="w-12 h-12 bg-white shadow-sm rounded-xl flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-white transition-all">
                            <span>📍</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-primary">Office Location</h5>
                            <p class="text-slate-500 text-sm">Jl. Lengkong No 160 RT 03/13 Cilacap, Central Java, Indonesia</p>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="flex items-start space-x-5 group">
                        <div class="w-12 h-12 bg-white shadow-sm rounded-xl flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-white transition-all">
                            <span>📧</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-primary">Email Address</h5>
                            <p class="text-slate-500 text-sm italic underline decoration-secondary/30">office@entwo.co.id</p>
                        </div>
                    </div>

                    {{-- Phone/WA --}}
                    <div class="flex items-start space-x-5 group">
                        <div class="w-12 h-12 bg-white shadow-sm rounded-xl flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-white transition-all">
                            <span>📞</span>
                        </div>
                        <div>
                            <h5 class="font-bold text-primary">Phone & WhatsApp</h5>
                            <p class="text-slate-500 text-sm">(0282) 5561812</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bagian Kanan: Contact Form --}}
            <div class="w-full lg:w-2/3">
                <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl border border-slate-100">
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Nama --}}
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-primary ml-1">Your Name</label>
                                <input type="text" name="name" placeholder="John Doe"
                                    class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition">
                            </div>
                            {{-- Email --}}
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-primary ml-1">Email Address</label>
                                <input type="email" name="email" placeholder="john@example.com"
                                    class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition">
                            </div>
                        </div>

                        {{-- Subject --}}
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-primary ml-1">Subject</label>
                            <input type="text" name="subject" placeholder="Project Inquiry"
                                class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition">
                        </div>

                        {{-- Pesan --}}
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-primary ml-1">Message</label>
                            <textarea name="message" rows="5" placeholder="Tell us about your project..."
                                class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition resize-none"></textarea>
                        </div>

                        {{-- Submit Button --}}
                        <button type="submit" class="w-full md:w-fit px-10 py-4 bg-primary text-white font-bold rounded-xl hover:bg-secondary hover:shadow-lg transition-all active:scale-95">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
