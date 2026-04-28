<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Favicon ENTWO --}}
    <link rel="icon" type="ico" href="{{ asset('favicon.ico') }}">
    <title>Entwo Company</title>
    <!-- Aku pake font Poppins. -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    <button id="scrollToTop"
        class="fixed bottom-8 right-8 z-50 p-4 rounded-2xl bg-secondary text-primary shadow-lg shadow-secondary/20 translate-y-20 opacity-0 transition-all duration-500 hover:bg-white hover:-translate-y-1 active:scale-95 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform group-hover:-translate-y-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    @include('components.footer')
</body>
</html>
<script>
    const scrollBtn = document.getElementById("scrollToTop");

    window.onscroll = function() {
        // Jika scroll lebih dari 300px, munculkan tombol
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            scrollBtn.classList.remove("translate-y-20", "opacity-0");
            scrollBtn.classList.add("translate-y-0", "opacity-100");
        } else {
            // Jika kembali ke atas, sembunyikan lagi
            scrollBtn.classList.remove("translate-y-0", "opacity-100");
            scrollBtn.classList.add("translate-y-20", "opacity-0");
        }
    };

    // Fungsi Klik untuk Scroll ke Atas
    scrollBtn.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
