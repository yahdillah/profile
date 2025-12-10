@extends('layouts.app')

@section('title', 'Prestasi Siswa')

@section('content')
    <div class="bg-emerald-800 py-12 text-center text-white">
        <h1 class="text-4xl font-bold">Prestasi Madrasah</h1>
        <p class="mt-2 text-emerald-100">Kebanggaan MIS Ash-Shidiqqin</p>
    </div>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:-translate-y-2 transition duration-300">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <span class="absolute top-4 right-4 bg-yellow-400 text-emerald-900 text-xs font-bold px-3 py-1 rounded-full z-10">
                            AKADEMIK
                        </span>
                        <img src="{{ asset('images/GTK.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-emerald-900 mb-2"> North Jakarta Award</h3>
                        <p class="text-sm text-gray-500 mb-4">North Jakarta Award Kantor Kementerian Agama Kota Jakarta Utara</p>
                        <p class="text-gray-600 text-sm line-clamp-3">
                            26 November 2025, MI Ash-Shiddiqin berhasil meraih prestasi lembaga dan GTK.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:-translate-y-2 transition duration-300">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <span class="absolute top-4 right-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
                            MHQ
                        </span>
                        <img src="{{ asset('images/juarahafidz.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-emerald-900 mb-2">JUARA 2  Competition (JMC)</h3>
                        <p class="text-sm text-gray-500 mb-4">Jakarta Madrasah Competition (JMC) </p>
                        <p class="text-gray-600 text-sm line-clamp-3">
                            Competition (JMC) 2025 Tingkat Provinsi pada Cabang Lomba MHQ (Musabaqah Hifdzil Qur’an)
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:-translate-y-2 transition duration-300">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <span class="absolute top-4 right-4 bg-yellow-400 text-emerald-900 text-xs font-bold px-3 py-1 rounded-full z-10">
                            SENI
                        </span>
                        <img src="{{ asset('images/pencaksilat.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-emerald-900 mb-2">Prestasi Pencak Silat</h3>
                        <p class="text-sm text-gray-500 mb-4">Pertandingan Pencak Silat Piala Walikota</p>
                    </div>
                </div>

                 <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:-translate-y-2 transition duration-300">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <span class="absolute top-4 right-4 bg-yellow-400 text-emerald-900 text-xs font-bold px-3 py-1 rounded-full z-10">
                            MTQ
                        </span>
                        <img src="{{ asset('images/image.png') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-emerald-900 mb-2">Juara 1 Tahfidz</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
