@extends('layouts.app')

@section('content')
    <div class="relative bg-primary overflow-x-hidden min-h-screen">

        {{-- Glow Effects --}}
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-[120px] pointer-events-none"></div>

        {{-- 1. HERO SECTION (Referensi PDF Page 1) --}}
        <section class="relative pt-32 pb-20 border-b border-white/5">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="w-full md:w-2/3" data-aos="fade-right">
                        <div class="flex items-center space-x-3 mb-6">
                            <span class="px-3 py-1 bg-secondary/20 text-secondary text-xs font-bold rounded-md tracking-widest uppercase">Company Profile</span>
                        </div>
                        <h1 class="text-4xl md:text-6xl font-black text-white leading-tight mb-6">
                            CV ENTWO <br>
                            <span class="text-secondary">Electronic & Engineering</span>
                        </h1>
                        <p class="text-slate-400 text-lg leading-relaxed border-l-4 border-secondary pl-6">
                            General Contracting, Supply, Automation, and Maintenance Industry. <br>
                            Established in <span class="text-white font-bold">2013</span> at Cilacap, Central Java.
                        </p>
                    </div>
                    <div class="w-full md:w-1/4" data-aos="zoom-in">
                        <div class="p-8 bg-slate-800/40 rounded-3xl border border-white/10 backdrop-blur-md">
                            <h4 class="text-white font-bold mb-4">Quick Contact</h4>
                            <ul class="space-y-4 text-sm text-slate-400">
                                <li class="flex items-center gap-3">
                                    <span class="text-secondary">📧</span> office@entwo.co.id
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="text-secondary">📞</span> (0282) 5561812
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="text-secondary">🌐</span> entwo.co.id
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 2. HISTORY & VISION (Referensi PDF Intro) --}}
        <section class="py-24 bg-slate-900/30">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-white mb-8 italic">"Embrace the future with ENTWO, where solutions meet excellence."</h2>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            Right at the heart of innovation and dynamism, CV ENTWO Electronic & Engineering has been a pioneer since its founding in 2013. We have set new standards in providing reliable high-quality solutions to various industries.
                        </p>
                        <p class="text-slate-400 leading-relaxed">
                            With a professional team committed to excellence, we have established a strong relationship as a trusted partner for our customers. Every step we take is driven by innovation and technical expertise.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4" data-aos="fade-left">
                        {{-- Image Grid ala PDF --}}
                        <div class="rounded-2xl overflow-hidden h-40 border border-white/10">
                            <img src="{{ Vite::asset('resources/images/img2.jpeg') }}" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden h-40 border border-white/10">
                            <img src="{{ Vite::asset('resources/images/img3.png') }}" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden h-60 col-span-2 border border-white/10">
                            <img src="{{ Vite::asset('resources/images/colase2.png') }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- SECTION OFFICE & WORKSHOP --}}
        <section class="py-24 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">
                {{-- Title Banner --}}
                <div class="bg-secondary rounded-3xl p-8 md:p-12 flex flex-col md:flex-row justify-between items-center gap-8 mb-16" data-aos="flip-up">
                    <div class="text-center md:text-left">
                        <h2 class="text-primary text-3xl md:text-5xl font-black uppercase tracking-tighter">Office & Workshop</h2>
                        <div class="w-24 h-1 bg-primary mx-auto md:mx-0 mt-4"></div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl shadow-lg">
                        <span class="text-5xl">📍</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                    {{-- Lokasi 1: Head Office --}}
                    <div class="flex flex-col gap-6" data-aos="fade-right">
                        <div class="bg-slate-800/40 p-6 md:p-8 rounded-3xl border border-white/10 backdrop-blur-sm flex-1">
                            <h4 class="text-secondary font-bold text-xl mb-2 italic">Head Office Entwo</h4>
                            <p class="text-slate-400 text-xs mb-4 font-mono tracking-widest uppercase">7°41'27.6"S 109°01'17.4"E</p>
                            <p class="text-slate-300 text-sm leading-relaxed mb-6">
                                Jl. Ir. H. Juanda No. 117, Sidanegara, Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53182
                            </p>

                            {{-- Map Container --}}
                            <div class="rounded-2xl overflow-hidden shadow-lg border-2 border-slate-700 h-[250px] mb-6">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.5422634358686!2d109.0215!3d-7.691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDEnMjcuNiJTIDEwOcKwMDEnMTcuNCJF!5e0!3m2!1sen!2sid!4v1713950000000!5m2!1sen!2sid"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="grayscale invert opacity-80 hover:opacity-100 transition duration-500">
                                </iframe>
                            </div>

                            {{-- QR Code Section --}}
                            <div class="flex items-center gap-6 p-4 bg-white/5 rounded-2xl border border-dashed border-white/20">
                                <div class="w-20 h-20 bg-white p-1.5 rounded-lg flex-shrink-0">
                                    {{-- Ganti dengan path file image QR Code aslimu --}}
                                    <img src="{{ Vite::asset('resources/images/QRJuanda.png') }}" alt="QR Office" class="w-full h-full">
                                </div>
                                <div>
                                    <p class="text-[10px] text-slate-500 font-mono uppercase tracking-[0.2em] mb-1">Scan for Location</p>
                                    <p class="text-xs text-slate-300 font-bold uppercase">Open in Google Maps</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Lokasi 2: Workshop --}}
                    <div class="flex flex-col gap-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="bg-slate-800/40 p-6 md:p-8 rounded-3xl border border-white/10 backdrop-blur-sm flex-1">
                            <h4 class="text-secondary font-bold text-xl mb-2 italic">Workshop Office</h4>
                            <p class="text-slate-400 text-xs mb-4 font-mono tracking-widest uppercase">7°41'21.1"S 109°01'07.6"E</p>
                            <p class="text-slate-300 text-sm leading-relaxed mb-6">
                                Jl. Lengkong No.64-62, Lengkong, Mertasinga, Kec. Cilacap Utara, Kabupaten Cilacap, Jawa Tengah 53274
                            </p>

                            {{-- Map Container --}}
                            <div class="rounded-2xl overflow-hidden shadow-lg border-2 border-slate-700 h-[250px] mb-6">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.4917204935671!2d109.0613643840234!3d-7.686703050050465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e656d001d5c61ab%3A0x18efe54831170404!2sWORKSHOP%20ENTWO%20GROUP!5e0!3m2!1sid!2sid!4v1777000381817!5m2!1sid!2sid"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="grayscale invert opacity-80 hover:opacity-100 transition duration-500">
                                </iframe>
                            </div>

                            {{-- QR Code Section --}}
                            <div class="flex items-center gap-6 p-4 bg-white/5 rounded-2xl border border-dashed border-white/20">
                                <div class="w-20 h-20 bg-white p-1.5 rounded-lg flex-shrink-0">
                                    {{-- Ganti dengan path file image QR Code aslimu --}}
                                    <img src="{{ Vite::asset('resources/images/QRLengkong.png') }}" alt="QR Workshop" class="w-full h-full">
                                </div>
                                <div>
                                    <p class="text-[10px] text-slate-500 font-mono uppercase tracking-[0.2em] mb-1">Scan for Location</p>
                                    <p class="text-xs text-slate-300 font-bold uppercase">Open in Google Maps</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
@endsection
