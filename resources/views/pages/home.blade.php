@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="relative h-screen w-full overflow-hidden bg-primary">

    {{-- Slider Background --}}
    <div class="swiper hero-swiper absolute inset-0 w-full h-full z-0">
        <div class="swiper-wrapper">
            {{-- Slide 1 --}}
            <div class="swiper-slide relative h-full w-full">
                {{-- Overlay per slide agar gambar apapun tetap gelap --}}
                <div class="absolute inset-0 bg-black/60 md:bg-black/40 z-10"></div>
                <img src="{{ Vite::asset('resources/images/logo entwo group.png') }}"
                    alt="Entwo Group"
                    class="w-full h-full object-fill md:object-cover block">
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide relative h-full w-full">
                <div class="absolute inset-0 bg-black/60 md:bg-black/40 z-10"></div>
                <img src="{{ Vite::asset('resources/images/Logo Entwo.png') }}"
                    alt="Entwo Group"
                    class="w-full h-full object-fill md:object-cover block">
            </div>

            {{-- Slide 3 --}}
            <div class="swiper-slide relative h-full w-full">
                <div class="absolute inset-0 bg-black/60 md:bg-black/40 z-10"></div>
                <img src="{{ Vite::asset('resources/images/img2.jpeg') }}"
                    alt="Entwo Group"
                    class="w-full h-full object-fill md:object-cover block">
            </div>
        </div>

        {{-- Pagination --}}
        <div class="swiper-pagination"></div>
    </div>

    {{-- Konten Teks (Floating di atas Slider) --}}
    <div class="absolute inset-0 z-20 flex flex-col items-center justify-center px-6">
        <div class="text-center animate-fade-in">
            <h1 class="text-3xl md:text-6xl font-bold leading-tight text-white drop-shadow-lg">
                Welcome to <span class="text-secondary">Entwo</span>
            </h1>
            <p class="mt-4 text-base md:text-lg text-slate-200 opacity-90 max-w-lg mx-auto drop-shadow-md">
                Innovative IT Solutions for Your Business
            </p>
        </div>
    </div>

</section>
<!-- About Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="section-title">About Us</h2>
        <p class="mt-6 text-gray-600 max-w-3xl mx-auto">
            Entwo is a technology company focused on developing innovative digital solutions,
helping businesses improve efficiency and competitiveness in the era of digital transformation.
        </p>
    </div>
</section>
{{-- Services Section --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-primary mb-12">
            Our Services
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Web Development</h3>
                <p class="text-gray-600">
                    Building responsive and modern websites tailored to your business needs.
                </p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Mobile Apps</h3>
                <p class="text-gray-600">
                    Creating user-friendly mobile applications for both iOS and Android platforms.
                </p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Cloud Solutions</h3>
                <p class="text-gray-600">
                    Offering scalable cloud services to enhance your business operations.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="section-title mb-12">Our Portfolio</h2>
        <div class="grid md:grid-cols-3 gap-8">
            @for ($i = 1; $i <= 3; $i++)
                <div class="overflow-hidden rounded-xl shadow hover:shadow-lg transition">
                    <img src="{{ asset('images/portfolio'.$i.'.jpg') }}" alt="Project {{ $i }}" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold text-primary">Project {{ $i }}</h3>
                        <p class="text-gray-600 text-sm">Deskripsi singkat proyek.</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
{{-- Contact Section --}}
<section class="py-20 pt-32">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="section-title mb-8">Contact Us</h2>
        <div class="bg-white p-8 rounded-xl shadow">
            <form>
                <div class="grid md:grid-cols-2 gap-6">
                    <input type="text" placeholder="Nama" class="border p-3 rounded-lg w-full">
                    <input type="email" placeholder="Email" class="border p-3 rounded-lg w-full">
                </div>
                <textarea placeholder="Pesan" rows="5" class="border p-3 rounded-lg w-full mt-6"></textarea>
                <button type="submit" class="btn-primary mt-6">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>
@endsection
