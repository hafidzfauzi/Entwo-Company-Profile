@extends('layouts.app')

@section('content')

{{-- Bungkus seluruh halaman dengan background gelap & hidden overflow agar glow tidak melebar --}}
<div class="relative bg-primary overflow-x-hidden">

    {{-- Global Decorative Glow Effects --}}
    <div class="absolute top-[100vh] left-0 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-[120px] -translate-x-1/2 pointer-events-none z-0"></div>
    <div class="absolute top-[250vh] right-0 w-[600px] h-[600px] bg-accent/5 rounded-full blur-[150px] translate-x-1/3 pointer-events-none z-0"></div>
    <div class="absolute bottom-[50vh] left-1/4 w-[800px] h-[800px] bg-secondary/5 rounded-full blur-[150px] pointer-events-none z-0"></div>

    {{-- ========================================== --}}
    {{-- HERO SECTION --}}
    {{-- ========================================== --}}
    <section id="hero" class="relative h-screen w-full overflow-hidden bg-primary z-10">
        {{-- Slider Background --}}
        <div class="swiper hero-swiper absolute inset-0 w-full h-full z-0">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative h-full w-full">
                    <div class="absolute inset-0 bg-primary/70 z-10"></div>
                    <img src="{{ Vite::asset('resources/images/logo entwo group.png') }}" alt="Entwo Group" class="w-full h-full object-cover block">
                </div>
                <div class="swiper-slide relative h-full w-full">
                    <div class="absolute inset-0 bg-primary/70 z-10"></div>
                    <img src="{{ Vite::asset('resources/images/pltucilacap.jpg') }}" alt="Entwo Group" class="w-full h-full object-cover block">
                </div>
                <div class="swiper-slide relative h-full w-full">
                    <div class="absolute inset-0 bg-primary/70 z-10"></div>
                    <img src="{{ Vite::asset('resources/images/img2.jpeg') }}" alt="Entwo Group" class="w-full h-full object-cover block">
                </div>
                <div class="swiper-slide relative h-full w-full">
                    <div class="absolute inset-0 bg-primary/70 z-10"></div>
                    <img src="{{ Vite::asset('resources/images/cover.png') }}" alt="Entwo Group" class="w-full h-full object-cover block">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        {{-- Konten Teks --}}
        <div class="absolute inset-0 z-20 flex flex-col items-center justify-center px-6">
            {{-- AOS: Muncul membesar perlahan dari tengah --}}
            <div class="text-center" data-aos="zoom-in" data-aos-duration="1200">
                <h1 class="text-3xl md:text-6xl font-bold leading-tight text-white drop-shadow-2xl">
                    Welcome to <br><span class="text-secondary">Entwo Electronic & Engineering</span>
                </h1>
                <p class="mt-4 text-base md:text-lg text-slate-300 opacity-90 max-w-lg mx-auto drop-shadow-md">
                    Innovative IT Solutions for Your Business
                </p>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-primary to-transparent z-20"></div>
    </section>

    {{-- ========================================== --}}
    {{-- ABOUT US SECTION --}}
    {{-- ========================================== --}}
    <section id="about" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">

                {{-- Left Column: Image --}}
                {{-- AOS: Slide masuk dari Kiri --}}
                <div class="w-full lg:w-1/2 relative" data-aos="fade-right">
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-secondary/20 rounded-full -z-10 animate-pulse blur-2xl"></div>
                    <div class="absolute -bottom-10 -right-6 w-48 h-48 bg-accent/10 rounded-2xl -z-10 rotate-12 blur-xl"></div>

                    <div class="relative rounded-2xl overflow-hidden shadow-2xl shadow-black/50 border-4 border-slate-800">
                        <img src="{{ Vite::asset('resources/images/img3.png') }}" alt="ENTWO Engineering Excellence" class="w-full h-[500px] object-cover hover:scale-105 transition duration-700 opacity-90 hover:opacity-100">
                    </div>

                    <div class="absolute -bottom-6 -left-6 bg-secondary p-8 rounded-2xl shadow-xl shadow-secondary/20 hidden md:block" data-aos="zoom-in" data-aos-delay="300">
                        <p class="text-primary text-4xl font-black leading-none">13+</p>
                        <p class="text-primary/80 text-xs font-bold uppercase tracking-tighter">Years of Service</p>
                    </div>
                </div>

                {{-- Right Column: Copy --}}
                {{-- AOS: Slide masuk dari Kanan --}}
                <div class="w-full lg:w-1/2 space-y-8" data-aos="fade-left" data-aos-delay="100">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-2">
                            <span class="w-12 h-[2px] bg-secondary"></span>
                            <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-xs">Since 2013</h4>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">
                            Right at the heart of <span class="text-secondary underline decoration-secondary/30 underline-offset-8">Innovation</span>
                        </h2>
                    </div>

                    <div class="space-y-6">
                        <p class="text-slate-300 leading-relaxed text-lg italic border-l-4 border-secondary pl-6 bg-slate-800/30 p-4 rounded-r-xl">
                            "Embrace the future with ENTWO, where solutions meet excellence."
                        </p>
                        <p class="text-slate-400 leading-relaxed">
                            CV ENTWO Electronic & Engineering has been a pioneer in the general contracting, supply, automation and maintenance industry since its founding in 2013. Based in Cilacap, Central Java, Indonesia, we have set new standards in providing reliable high-quality solutions to various industries.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-6 pt-4">
                        <div class="group bg-slate-800/40 p-4 rounded-xl border border-slate-700/50 backdrop-blur-sm" data-aos="fade-up" data-aos-delay="300">
                            <div class="flex items-center space-x-3 mb-2">
                                <span class="text-secondary group-hover:scale-125 transition">⚡</span>
                                <h5 class="font-bold text-white">Automation</h5>
                            </div>
                            <p class="text-xs text-slate-400">Industry-leading technical expertise.</p>
                        </div>
                        <div class="group bg-slate-800/40 p-4 rounded-xl border border-slate-700/50 backdrop-blur-sm" data-aos="fade-up" data-aos-delay="400">
                            <div class="flex items-center space-x-3 mb-2">
                                <span class="text-secondary group-hover:scale-125 transition">🛠️</span>
                                <h5 class="font-bold text-white">Maintenance</h5>
                            </div>
                            <p class="text-xs text-slate-400">Dedicated to delivering the best.</p>
                        </div>
                    </div>

                    <div class="pt-6" data-aos="fade-up" data-aos-delay="500">
                        <a href="/about" class="px-8 py-4 bg-secondary text-primary font-bold rounded-xl hover:bg-white hover:shadow-lg hover:shadow-white/10 transition-all flex items-center w-fit space-x-3 group">
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

    {{-- ========================================== --}}
    {{-- SERVICES SECTION --}}
    {{-- ========================================== --}}
    <section id="service" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6">

            {{-- Header --}}
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4" data-aos="fade-up">
                <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-sm">What We Offer</h4>
                <h2 class="text-3xl md:text-5xl font-bold text-white">Comprehensive Solutions for Industry Needs</h2>
                <div class="w-20 h-1.5 bg-secondary mx-auto rounded-full"></div>
                <p class="text-slate-400 italic">"Providing reliable high-quality solutions to various industries."</p>
            </div>

            {{-- Services Grid (Efek Domino / Staggered) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                {{-- Service 1 --}}
                <div data-aos="fade-up" data-aos-delay="100" class="bg-slate-800/40 backdrop-blur-md p-8 rounded-3xl border border-slate-700/50 hover:border-secondary/50 shadow-xl hover:shadow-secondary/10 hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-slate-900/50 border border-slate-700 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:border-secondary transition-colors">
                        <span class="text-3xl group-hover:scale-110 transition">🏗️</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-secondary transition-colors">General Contractor</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Setting new standards in construction and project management with high-quality execution.
                    </p>
                </div>

                {{-- Service 2 --}}
                <div data-aos="fade-up" data-aos-delay="200" class="bg-slate-800/40 backdrop-blur-md p-8 rounded-3xl border border-slate-700/50 hover:border-secondary/50 shadow-xl hover:shadow-secondary/10 hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-slate-900/50 border border-slate-700 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:border-secondary transition-colors">
                        <span class="text-3xl group-hover:scale-110 transition">⚙️</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-secondary transition-colors">System Integrator</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Advanced automation and technical expertise to streamline your industrial operations.
                    </p>
                </div>

                {{-- Service 3 --}}
                <div data-aos="fade-up" data-aos-delay="300" class="bg-slate-800/40 backdrop-blur-md p-8 rounded-3xl border border-slate-700/50 hover:border-secondary/50 shadow-xl hover:shadow-secondary/10 hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-slate-900/50 border border-slate-700 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:border-secondary transition-colors">
                        <span class="text-3xl group-hover:scale-110 transition">📦</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-secondary transition-colors">Supply Services</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Trusted partner in providing high-quality industrial components and engineering supplies.
                    </p>
                </div>

                {{-- Service 4 --}}
                <div data-aos="fade-up" data-aos-delay="400" class="bg-slate-800/40 backdrop-blur-md p-8 rounded-3xl border border-slate-700/50 hover:border-secondary/50 shadow-xl hover:shadow-secondary/10 hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-slate-900/50 border border-slate-700 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:border-secondary transition-colors">
                        <span class="text-3xl group-hover:scale-110 transition">🛠️</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-secondary transition-colors">Maintenance</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Dedicated maintenance services to ensure your machinery and systems run at peak performance.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- CLIENT MARQUEE SECTION --}}
    {{-- ========================================== --}}
    {{-- AOS: Fade masuk pelan-pelan --}}
    <section class="py-12 bg-slate-900/50 border-y border-slate-800 backdrop-blur-sm relative z-10" data-aos="fade-in" data-aos-duration="1000">
        <div class="max-w-7xl mx-auto px-6 mb-8">
            <p class="text-center text-slate-500 text-sm font-bold uppercase tracking-widest">
                Trusted by Industry Leaders
            </p>
        </div>

        <div class="relative flex overflow-hidden">
            <div class="animate-marquee flex items-center opacity-50 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <div class="flex items-center gap-16 md:gap-24 px-8 md:px-12">
                    <div class="flex items-center space-x-4 whitespace-nowrap">
                        <img src="{{ Vite::asset('resources/images/PT. SUMBER SEGARA PRIMADAYA (S2P).ico') }}" alt="S2P" class="h-10 md:h-12 w-auto object-contain">
                        <span class="font-bold text-lg md:text-xl text-slate-300">PT. SUMBER SEGARA PRIMADAYA</span>
                    </div>
                    <div class="flex items-center space-x-4 whitespace-nowrap">
                        <img src="{{ Vite::asset('resources/images/PT D&C ENGINEERING COMPANY.ico') }}" alt="D&C" class="h-10 md:h-12 w-auto object-contain">
                        <span class="font-bold text-lg md:text-xl text-slate-300">PT. D&C ENGINEERING COMPANY</span>
                    </div>
                    <div class="flex items-center space-x-4 whitespace-nowrap">
                        <img src="{{ Vite::asset('resources/images/PT. GADING MAS UTAMA.ico') }}" alt="Gading Mas" class="h-10 md:h-12 w-auto object-contain">
                        <span class="font-bold text-lg md:text-xl text-slate-300">PT. GADING MAS UTAMA</span>
                    </div>
                    <div class="flex items-center space-x-4 whitespace-nowrap">
                        <img src="{{ Vite::asset('resources/images/PT. TRIA DAYATAMA POWER SOLUSINDO.ico') }}" alt="Tria Dayatama" class="h-10 md:h-12 w-auto object-contain">
                        <span class="font-bold text-lg md:text-xl text-slate-300">PT. TRIA DAYATAMA POWER SOLUSINDO</span>
                    </div>
                    <div class="flex items-center space-x-4 whitespace-nowrap">
                        <img src="{{ Vite::asset('resources/images/BUT CHINA NATIONAL CHEMICAL ENGINEERING CO., LTD (BUT. CNCEC).ico') }}" alt="CNCEC" class="h-10 md:h-12 w-auto object-contain">
                        <span class="font-bold text-lg md:text-xl text-slate-300">BUT. CNCEC</span>
                    </div>
                </div>

                <div class="flex items-center gap-16 md:gap-24 px-8 md:px-12" aria-hidden="true">
                    <div class="flex items-center space-x-4 whitespace-nowrap">
                        <img src="{{ Vite::asset('resources/images/PT. SUMBER SEGARA PRIMADAYA (S2P).ico') }}" alt="S2P" class="h-10 md:h-12 w-auto object-contain">
                        <span class="font-bold text-lg md:text-xl text-slate-300">PT. SUMBER SEGARA PRIMADAYA</span>
                    </div>
                    <div class="flex items-center space-x-4 whitespace-nowrap">
                        <img src="{{ Vite::asset('resources/images/PT D&C ENGINEERING COMPANY.ico') }}" alt="D&C" class="h-10 md:h-12 w-auto object-contain">
                        <span class="font-bold text-lg md:text-xl text-slate-300">PT. D&C ENGINEERING COMPANY</span>
                    </div>
                    <div class="flex items-center space-x-4 whitespace-nowrap">
                        <img src="{{ Vite::asset('resources/images/PT. GADING MAS UTAMA.ico') }}" alt="Gading Mas" class="h-10 md:h-12 w-auto object-contain">
                        <span class="font-bold text-lg md:text-xl text-slate-300">PT. GADING MAS UTAMA</span>
                    </div>
                    <div class="flex items-center space-x-4 whitespace-nowrap">
                        <img src="{{ Vite::asset('resources/images/PT. TRIA DAYATAMA POWER SOLUSINDO.ico') }}" alt="Tria Dayatama" class="h-10 md:h-12 w-auto object-contain">
                        <span class="font-bold text-lg md:text-xl text-slate-300">PT. TRIA DAYATAMA POWER SOLUSINDO</span>
                    </div>
                    <div class="flex items-center space-x-4 whitespace-nowrap">
                        <img src="{{ Vite::asset('resources/images/BUT CHINA NATIONAL CHEMICAL ENGINEERING CO., LTD (BUT. CNCEC).ico') }}" alt="CNCEC" class="h-10 md:h-12 w-auto object-contain">
                        <span class="font-bold text-lg md:text-xl text-slate-300">BUT. CNCEC</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- PORTFOLIO PREVIEW SECTION --}}
    {{-- ========================================== --}}
    <section id="portfolio" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6" data-aos="fade-up">
                <div class="space-y-4">
                    <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-sm">Our Works</h4>
                    <h2 class="text-3xl md:text-5xl font-bold text-white">Featured Projects</h2>
                </div>
                <p class="text-slate-400 max-w-md md:text-right">
                    A showcase of our dedication to technical expertise and industrial excellence across Indonesia.
                </p>
            </div>

            {{-- Grid Portfolio (Efek Domino / Staggered) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div data-aos="fade-up" data-aos-delay="100" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[4/3] bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectPIMS.png') }}" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">System Integrator</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2020</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">
                            PIMS OSISOFT Optimization
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">
                            Real-time monitoring and operational efficiency optimization for industrial systems.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[4/3] bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectAbsen.png') }}" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Software</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2020</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">
                            Online Attendance System
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">
                            Web-based attendance solution for employees with real-time tracking and reporting.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-[4/3] bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectCondensor.png') }}" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Maintenance</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">
                            Condensor CCTV
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">
                            Technical installation of signal converter units for industrial CCTV monitoring.
                        </p>
                    </div>
                </div>

            </div>

            <div class="mt-16 text-center" data-aos="zoom-in">
                <a href="/portfolio" class="inline-block px-8 py-4 border-2 border-secondary text-secondary font-bold rounded-full hover:bg-secondary hover:text-primary hover:shadow-[0_0_20px_rgba(56,189,248,0.4)] transition-all duration-300">
                    Explore All Projects
                </a>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- PRODUCT SECTION --}}
    {{-- ========================================== --}}
    <section id="products" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 md:mb-20 gap-6" data-aos="fade-down">
                <div class="space-y-4">
                    <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-sm">Our Innovations</h4>
                    <h2 class="text-4xl md:text-5xl font-bold leading-tight text-white">
                        Advanced Digital <br class="hidden md:block">
                        <span class="text-secondary" style="-webkit-text-stroke: 1px #38BDF8;">Solutions</span>
                    </h2>
                </div>
                <p class="text-slate-400 max-w-md text-left md:text-right italic text-sm md:text-base border-l-2 border-secondary pl-4 md:border-l-0 md:pl-0">
                    "Embrace the future with ENTWO, where solutions meet excellence."
                </p>
            </div>

            <div class="space-y-16">
                {{-- Product 1: SHEguard --}}
                {{-- AOS: Geser dari Kanan --}}
                <div data-aos="fade-left" class="group bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] border border-slate-700/50 overflow-hidden hover:border-secondary/50 shadow-xl transition-all duration-500">
                    <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:w-1/2 p-8 md:p-14 space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center text-primary font-bold text-xl">🛡️</div>
                                <h3 class="text-3xl font-bold tracking-tighter uppercase text-secondary">SHEguard</h3>
                            </div>
                            <p class="text-slate-300 leading-relaxed text-sm md:text-base">
                                A software system designed to help companies manage and improve HSE aspects. It creates a safer work environment and ensures compliance with environmental regulations.
                            </p>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 pt-4">
                                @foreach(['Risk Control', 'Incident Reporting', 'Compliance Monitoring', 'HSE Training', 'Document Management', 'Data Analysis'] as $feature)
                                    <div class="bg-slate-900/50 border border-slate-700 px-3 py-2 rounded-lg text-[10px] uppercase hover:scale-105 hover:bg-secondary hover:text-primary transition-colors font-bold text-slate-300 flex items-center space-x-2">
                                        <span class="w-1.5 h-1.5 bg-secondary rounded-full"></span>
                                        <span>{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 p-8 bg-gradient-to-br from-secondary/10 to-transparent">
                            <img src="{{ Vite::asset('resources/images/SheGuard.png') }}" alt="SHEguard Dashboard" class="rounded-xl border border-slate-700 shadow-2xl transform group-hover:scale-105 transition duration-500">
                        </div>
                    </div>
                </div>

                {{-- Product 2: AUGMEE.ID --}}
                {{-- AOS: Geser dari Kiri --}}
                <div data-aos="fade-right" class="group bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] border border-slate-700/50 overflow-hidden hover:border-secondary/50 shadow-xl transition-all duration-500">
                    <div class="flex flex-col lg:flex-row-reverse items-center">
                        <div class="w-full lg:w-1/2 p-8 md:p-14 space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center text-primary font-bold text-xl">🥽</div>
                                <h3 class="text-3xl font-bold tracking-tighter uppercase text-secondary">AUGMEE.ID</h3>
                            </div>
                            <p class="text-slate-300 leading-relaxed text-sm md:text-base">
                                Technology company focusing on the development of virtual solutions like AR and VR. We assist companies in adopting advanced technology to enhance performance and productivity.
                            </p>
                            <div class="bg-slate-900/50 border-l-4 border-secondary p-4 rounded-r-xl">
                                <p class="text-xs text-secondary font-bold italic">
                                    "Combining AR and IOT become a great solution to visualize realtime process in field."
                                </p>
                            </div>
                            <div class="flex space-x-4 pt-4">
                                <div class="text-center">
                                    <p class="text-2xl font-bold text-white">AR</p>
                                    <p class="text-[10px] text-slate-500 uppercase">Augmented Reality</p>
                                </div>
                                <div class="w-[1px] bg-slate-700"></div>
                                <div class="text-center">
                                    <p class="text-2xl font-bold text-white">VR</p>
                                    <p class="text-[10px] text-slate-500 uppercase">Virtual Reality</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 p-8 bg-gradient-to-bl from-secondary/10 to-transparent">
                            <img src="{{ Vite::asset('resources/images/augmeeid.png') }}" alt="AUGMEE AR Visualization" class="rounded-xl border border-slate-700 shadow-2xl transform group-hover:scale-105 transition duration-500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- CONTACT SECTION --}}
    {{-- ========================================== --}}
    <section id="contact" class="py-24 relative z-10 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16">

                {{-- Kiri: Info Kontak --}}
                <div class="w-full lg:w-1/3 space-y-10" data-aos="fade-right">
                    <div class="space-y-4">
                        <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-sm">Contact Us</h4>
                        <h2 class="text-3xl md:text-5xl font-bold text-white">Let's Discuss Your Project</h2>
                        <p class="text-slate-400 leading-relaxed">
                            Ready to innovate with us? Reach out through any of these channels or fill out the form.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-5 group">
                            <div class="w-12 h-12 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-primary transition-all">
                                <span>📍</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-white">Office Location</h5>
                                <p class="text-slate-400 text-sm mt-1" style="max-width: 300px;">
                                    Jl. Lengkong No 160 RT 03/13 Cilacap, Central Java, Indonesia
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-5 group">
                            <div class="w-12 h-12 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-primary transition-all">
                                <span>📧</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-white">Email Address</h5>
                                <p class="text-slate-400 text-sm mt-1 italic hover:text-secondary cursor-pointer transition-colors">office@entwo.co.id</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-5 group">
                            <div class="w-12 h-12 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-xl flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-primary transition-all">
                                <span>📞</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-white">Phone</h5>
                                <p class="text-slate-400 text-sm mt-1 hover:text-secondary cursor-pointer transition-colors">(0282) 5561812</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kanan: Form --}}
                <div class="w-full lg:w-2/3" data-aos="fade-left" data-aos-delay="200">
                    <div class="bg-slate-800/40 backdrop-blur-md p-8 md:p-12 rounded-3xl shadow-xl border border-slate-700/50">
                        @if(session('success'))
                            <div class="p-4 mb-4 text-sm text-green-400 bg-slate-800 border border-green-400 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="p-4 mb-4 text-sm text-red-400 bg-slate-800 border border-red-400 rounded-lg">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            {{-- HONEYPOT: Field ini disembunyikan dari manusia --}}
                            <input type="text" name="website_url" class="hidden" tabindex="-1" autocomplete="off">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <input type="text" name="name" placeholder="Your Name" required
                                    class="bg-slate-900 border border-slate-700 text-white rounded-xl px-4 py-3 focus:border-secondary outline-none transition">

                                <input type="email" name="email" placeholder="Your Email" required
                                    class="bg-slate-900 border border-slate-700 text-white rounded-xl px-4 py-3 focus:border-secondary outline-none transition">
                            </div>

                            <input type="text" name="subject" placeholder="Subject"
                                class="w-full mt-6 bg-slate-900 border border-slate-700 text-white rounded-xl px-4 py-3 focus:border-secondary outline-none transition">

                            <textarea name="message" rows="5" placeholder="Your Message" required
                                class="w-full mt-6 bg-slate-900 border border-slate-700 text-white rounded-xl px-4 py-3 focus:border-secondary outline-none transition"></textarea>

                            <button type="submit"
                                class="mt-6 w-full bg-secondary text-primary font-bold py-4 rounded-xl hover:bg-white transition duration-300 uppercase tracking-widest shadow-lg shadow-secondary/20">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection
