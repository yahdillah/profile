@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <div class="bg-emerald-800 py-12 md:py-16 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-pattern opacity-10"></div>
        <h1 class="text-3xl md:text-4xl font-bold relative z-10 px-4">Profil Madrasah</h1>
        <p class="mt-4 text-emerald-100 text-base md:text-lg relative z-10 px-4">Mengenal lebih dekat MIS Ash-Shidiqqin</p>
    </div>

    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-start">

                <div>
                    <img src="{{ asset('images/profile.jpg') }}"
                         alt="Gedung Sekolah"
                         class="rounded-2xl shadow-xl w-full h-auto border-4 border-yellow-400 object-cover">

                    <div class="mt-6 bg-emerald-50 p-6 rounded-xl border-l-4 border-emerald-800">
                        <h4 class="font-bold text-emerald-900 mb-2 text-lg">Yayasan Ash-Shidiqqin Syahdan</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Kami bernaung di bawah yayasan yang berkomitmen penuh pada pengembangan pendidikan Islam yang moderat dan berkemajuan.
                        </p>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-emerald-900 mb-6">Sejarah Singkat</h2>
                    <div class="prose text-gray-600 leading-relaxed text-base md:text-lg text-left md:text-justify">
                        <p class="mb-4">
                            MIS Ash-Shidiqqin didirikan sebagai wujud kepedulian terhadap pendidikan anak-anak di lingkungan Kalibaru, Cilincing, Jakarta Utara. Bermula dari keinginan luhur untuk mencetak generasi yang tidak hanya pandai dalam ilmu pengetahuan umum, tetapi juga teguh dalam memegang nilai-nilai agama Islam.
                        </p>
                        <p class="mb-4">
                            Seiring berjalannya waktu, Madrasah kami terus berbenah dan berkembang. Dengan dukungan penuh dari Yayasan Ash-Shidiqqin Syahdan, kami terus melengkapi fasilitas pembelajaran dan meningkatkan kualitas tenaga pendidik demi memberikan layanan terbaik bagi masyarakat.
                        </p>
                        <p>
                            Kini, MIS Ash-Shidiqqin telah menjadi salah satu lembaga pendidikan pilihan yang dipercaya masyarakat untuk membina putra-putrinya menjadi insan yang <strong class="text-emerald-800">Beriman, Cerdas, dan Berakhlak Mulia</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-emerald-900">Identitas Madrasah</h2>
                <div class="w-16 h-1 bg-yellow-500 mx-auto mt-3 rounded"></div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden max-w-4xl mx-auto border border-gray-100">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[500px]"> <tbody>
                            <tr class="border-b hover:bg-emerald-50 transition">
                                <td class="p-4 font-bold text-emerald-900 w-1/3 whitespace-nowrap bg-gray-50 md:bg-white">Nama Sekolah</td>
                                <td class="p-4 text-gray-700">MIS ASH-SHIDIQQIN</td>
                            </tr>
                            <tr class="border-b hover:bg-emerald-50 transition">
                                <td class="p-4 font-bold text-emerald-900 whitespace-nowrap bg-gray-50 md:bg-white">NPSN / NSM</td>
                                <td class="p-4 text-gray-700">69853909 / 111231720173</td>
                            </tr>
                            <tr class="border-b hover:bg-emerald-50 transition">
                                <td class="p-4 font-bold text-emerald-900 whitespace-nowrap bg-gray-50 md:bg-white">Alamat</td>
                                <td class="p-4 text-gray-700">Jl. Kalibaru Barat IV No. 39 RT.009/006, Kel. Kalibaru, Kec. Cilincing</td>
                            </tr>
                            <tr class="border-b hover:bg-emerald-50 transition">
                                <td class="p-4 font-bold text-emerald-900 whitespace-nowrap bg-gray-50 md:bg-white">Kota / Provinsi</td>
                                <td class="p-4 text-gray-700">Kota Jakarta Utara, D.K.I. Jakarta</td>
                            </tr>
                            <tr class="border-b hover:bg-emerald-50 transition">
                                <td class="p-4 font-bold text-emerald-900 whitespace-nowrap bg-gray-50 md:bg-white">Status</td>
                                <td class="p-4 text-gray-700"><span class="bg-emerald-100 text-emerald-800 px-2 py-1 rounded text-xs font-bold uppercase">Swasta</span></td>
                            </tr>
                            <tr class="hover:bg-emerald-50 transition">
                                <td class="p-4 font-bold text-emerald-900 whitespace-nowrap bg-gray-50 md:bg-white">Waktu Belajar</td>
                                <td class="p-4 text-gray-700">Pagi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block md:hidden text-center text-xs text-gray-400 py-2 italic">
                    (Geser ke kiri untuk melihat detail)
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-emerald-900">Fasilitas Penunjang</h2>
                <p class="text-gray-500 mt-2 text-sm md:text-base">Sarana prasarana untuk mendukung kegiatan belajar mengajar (KBM)</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow border hover:border-yellow-400 transition text-center group hover:-translate-y-1 duration-300">
                    <div class="w-16 h-16 mx-auto bg-emerald-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-yellow-400 transition">
                        <svg class="w-8 h-8 text-emerald-800 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Ruang Kelas Nyaman</h3>
                </div>

                <div class="bg-white p-6 rounded-xl shadow border hover:border-yellow-400 transition text-center group hover:-translate-y-1 duration-300">
                    <div class="w-16 h-16 mx-auto bg-emerald-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-yellow-400 transition">
                        <svg class="w-8 h-8 text-emerald-800 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Perpustakaan</h3>
                </div>

                <div class="bg-white p-6 rounded-xl shadow border hover:border-yellow-400 transition text-center group hover:-translate-y-1 duration-300">
                    <div class="w-16 h-16 mx-auto bg-emerald-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-yellow-400 transition">
                        <svg class="w-8 h-8 text-emerald-800 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Lab Komputer</h3>
                </div>

                <div class="bg-white p-6 rounded-xl shadow border hover:border-yellow-400 transition text-center group hover:-translate-y-1 duration-300">
                    <div class="w-16 h-16 mx-auto bg-emerald-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-yellow-400 transition">
                        <svg class="w-8 h-8 text-emerald-800 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Masjid</h3>
                </div>
            </div>
        </div>
    </section>
@endsection
