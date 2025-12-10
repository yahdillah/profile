@extends('layouts.app')

@section('title', 'Galeri Foto')

@section('content')
    <div class="bg-white py-12 text-center border-b">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-emerald-900">Dokumentasi Kegiatan</h1>
            <div class="w-20 h-1 bg-yellow-500 mx-auto mt-4 rounded"></div>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-sm md:text-base">
                Momen-momen berharga dalam kegiatan belajar mengajar dan aktivitas siswa MIS Ash-Shidiqqin.
            </p>
        </div>
    </div>

    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 auto-rows-[250px]">
                <div class="col-span-1 sm:col-span-2 row-span-2 relative group overflow-hidden rounded-xl shadow-lg cursor-pointer h-80 sm:h-auto">
                    <img src="{{ asset('images/ngaji.jpg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-80 md:opacity-0 md:group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-yellow-400 font-bold text-sm tracking-wider mb-1 uppercase">Unggulan</span>
                        <span class="text-white font-bold text-xl md:text-2xl">Kegiatan Rutin Islami</span>
                        <p class="text-gray-300 text-sm mt-2 hidden md:block translate-y-4 group-hover:translate-y-0 transition duration-300">
                            Pembiasaan sholat dhuha dan tadarus Al-Qur'an setiap pagi.
                        </p>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-xl shadow-lg cursor-pointer">
                    <img src="{{ asset('images/futsal.jpg') }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white font-bold px-4 text-center">Latihan Futsal</span>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-xl shadow-lg cursor-pointer">
                    <img src="{{ asset('images/maulid.jpg') }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white font-bold px-4 text-center">Maulid Nabi</span>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-xl shadow-lg cursor-pointer">
                    <img src="{{ asset('images/mbg.jpg') }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white font-bold px-4 text-center">Makan Bergizi Gratis (MBG)</span>
                    </div>
                </div>

                <div class="relative group overflow-hidden rounded-xl shadow-lg cursor-pointer">
                    <img src="{{ asset('images/cek.jpg') }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white font-bold px-4 text-center">Screening Kesehatan</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
