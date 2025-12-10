<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIS ASH-SHIDIQQIN - @yield('title', 'Website Resmi')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen text-gray-800">

    <nav class="bg-emerald-800 shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group z-50 relative">
                    <div class="bg-white p-1 rounded-full group-hover:scale-105 transition duration-300">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Yayasan" class="w-10 h-10 object-contain">
                    </div>
                    <div>
                        <span class="block text-white font-bold text-lg leading-tight">MIS <span class="text-yellow-400">ASH-SHIDIQQIN</span></span>
                        <span class="block text-emerald-200 text-xs tracking-wider">Maju dan Bermakna</span>
                    </div>
                </a>

                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-white hover:text-yellow-400 font-medium transition {{ request()->routeIs('home') ? 'text-yellow-400 font-bold' : '' }}">Beranda</a>
                    <a href="{{ route('profile') }}" class="text-white hover:text-yellow-400 font-medium transition {{ request()->routeIs('profile') ? 'text-yellow-400 font-bold' : '' }}">Tentang Kami</a>
                    <a href="{{ route('achievements') }}" class="text-white hover:text-yellow-400 font-medium transition {{ request()->routeIs('achievements') ? 'text-yellow-400 font-bold' : '' }}">Prestasi</a>
                    <a href="{{ route('gallery') }}" class="text-white hover:text-yellow-400 font-medium transition {{ request()->routeIs('gallery') ? 'text-yellow-400 font-bold' : '' }}">Galeri</a>
                    <a href="{{ route('contact') }}" class="text-white hover:text-yellow-400 font-medium transition {{ request()->routeIs('contact') ? 'text-yellow-400 font-bold' : '' }}">Kontak</a>
                </div>

                <div class="hidden md:block">
                    <a href="{{ route('contact') }}" class="bg-yellow-500 hover:bg-yellow-600 text-emerald-900 font-bold py-2 px-5 rounded-full transition shadow-lg transform hover:-translate-y-0.5">
                        Daftar Sekarang
                    </a>
                </div>

                <div class="md:hidden z-50 flex items-center">
                    <button id="mobile-menu-btn" class="text-white focus:outline-none p-2">
                        <svg id="icon-menu" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <svg id="icon-close" class="hidden w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden fixed inset-0 bg-emerald-900 bg-opacity-95 z-40 flex flex-col justify-center items-center space-y-8 md:hidden transition-all duration-300">
            <a href="{{ route('home') }}" class="text-2xl text-white hover:text-yellow-400 font-bold {{ request()->routeIs('home') ? 'text-yellow-400' : '' }}">Beranda</a>
            <a href="{{ route('profile') }}" class="text-2xl text-white hover:text-yellow-400 font-bold {{ request()->routeIs('profile') ? 'text-yellow-400' : '' }}">Tentang Kami</a>
            <a href="{{ route('achievements') }}" class="text-2xl text-white hover:text-yellow-400 font-bold {{ request()->routeIs('achievements') ? 'text-yellow-400' : '' }}">Prestasi</a>
            <a href="{{ route('gallery') }}" class="text-2xl text-white hover:text-yellow-400 font-bold {{ request()->routeIs('gallery') ? 'text-yellow-400' : '' }}">Galeri</a>
            <a href="{{ route('contact') }}" class="text-2xl text-white hover:text-yellow-400 font-bold {{ request()->routeIs('contact') ? 'text-yellow-400' : '' }}">Kontak</a>

            <a href="{{ route('contact') }}" class="bg-yellow-500 text-emerald-900 font-bold py-3 px-8 rounded-full text-xl shadow-lg mt-4">
                Daftar Sekarang
            </a>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white pt-12 pb-6 mt-auto">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 text-yellow-400">MIS ASH-SHIDIQQIN</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Mewujudkan generasi Qur'ani, cerdas, dan berakhlak mulia di lingkungan Jakarta Utara.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Informasi</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('profile') }}" class="hover:text-yellow-400 transition">Profil Sekolah</a></li>
                        <li><a href="{{ route('achievements') }}" class="hover:text-yellow-400 transition">Prestasi Siswa</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-yellow-400 transition">Info PPDB</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Hubungi Kami</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li class="flex items-start"><span class="mr-2">📍</span> Jl Kalibaru Barat IV RT.002/007 Kel.Kakibaru Kec.Cilincing Jakarta Utara</li>
                        <li class="flex items-start"><span class="mr-2">✉️</span> miashshiddiqindiqin@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 text-center text-xs text-gray-500">
                &copy; {{ date('Y') }} MIS Ash-Shidiqqin. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconMenu = document.getElementById('icon-menu');
        const iconClose = document.getElementById('icon-close');

        btn.addEventListener('click', () => {
            // Toggle visibility menu
            menu.classList.toggle('hidden');

            // Toggle icon (Ganti garis tiga jadi silang)
            iconMenu.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');

            // Mencegah scroll pada body saat menu terbuka (opsional)
            document.body.classList.toggle('overflow-hidden');
        });

        // Menutup menu jika salah satu link diklik (opsional, bagus untuk SPA/anchor link)
        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                iconMenu.classList.remove('hidden');
                iconClose.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            });
        });
    </script>
</body>
</html>
