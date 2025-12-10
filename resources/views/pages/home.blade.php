@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="relative min-h-[600px] flex items-center justify-center text-white py-20 md:py-0">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1610890716271-e2fe9e9b0d6b?q=80&w=1600&auto=format&fit=crop');"></div>
        <div class="absolute inset-0 bg-emerald-900 opacity-85"></div>

        <div class="relative container mx-auto px-4 text-center z-10">
            <span class="block text-yellow-400 font-bold tracking-widest uppercase mb-4 text-xs md:text-base animate-pulse">
                Selamat Datang di Website Resmi
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold mb-6 leading-tight font-serif">
                MIS ASH-SHIDIQQIN <br>
                <span class="text-yellow-400 text-2xl sm:text-3xl md:text-5xl mt-2 block">Mencetak Generasi Qur'ani & Berprestasi</span>
            </h1>
            <p class="text-base md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Lembaga pendidikan Islam di Jakarta Utara yang berkomitmen memadukan ilmu pengetahuan umum dan nilai-nilai agama Islam.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('profile') }}" class="bg-yellow-500 hover:bg-yellow-600 text-emerald-900 font-bold py-3 px-8 rounded-full transition transform hover:scale-105 shadow-lg text-center">
                    Tentang Madrasah
                </a>
                <a href="{{ route('contact') }}" class="border-2 border-white hover:bg-white hover:text-emerald-900 text-white font-bold py-3 px-8 rounded-full transition text-center">
                    Info PPDB
                </a>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="relative mx-auto md:mx-0 max-w-md md:max-w-full">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-yellow-400 rounded-full opacity-50 blur-xl"></div>

                    <img src="{{ asset('images/kepala.jpg') }}"
                        alt="Kepala Madrasah"
                        class="relative rounded-2xl shadow-2xl w-full h-auto border-b-8 border-emerald-800 object-cover">

                    <div class="relative mt-4 md:mt-0 md:absolute md:bottom-4 md:left-4 bg-white p-4 rounded shadow-lg md:max-w-xs text-center md:text-left border border-gray-100">
                        <p class="text-emerald-800 font-bold text-lg">Romdiyah M.Pd</p>
                        <p class="text-gray-500 text-sm">Kepala MIS Ash-Shidiqqin</p>
                    </div>
                </div>

                <div class="text-center md:text-left">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Assalamu'alaikum Warahmatullahi Wabarakatuh</h2>
                    <p class="text-gray-600 leading-relaxed mb-6 text-base md:text-lg">
                        "Pendidikan di MIS Ash-Shidiqqin bukan sekadar transfer ilmu, tetapi juga pembentukan akhlakul karimah. Kami bertekad mewujudkan lingkungan belajar yang Islami, aman, dan menyenangkan bagi putra-putri Anda di wilayah Kalibaru, Cilincing dan sekitarnya."
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Mari bersinergi melahirkan generasi yang tidak hanya cerdas secara intelektual, tetapi juga sholeh secara spiritual.
                    </p>
                    <a href="{{ route('profile') }}" class="text-emerald-700 font-bold hover:text-emerald-900 inline-flex items-center group">
                        Baca Profil Lengkap
                        <span class="ml-2 group-hover:translate-x-1 transition">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 bg-emerald-50 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
        <div class="absolute -bottom-8 left-0 w-64 h-64 bg-yellow-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-emerald-900">Visi & Misi</h2>
                <div class="w-20 h-1 bg-yellow-500 mx-auto mt-4 rounded"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-1 bg-emerald-800 text-white p-8 md:p-10 rounded-3xl shadow-xl flex flex-col justify-center relative overflow-hidden group">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-white opacity-10 rounded-full group-hover:scale-150 transition duration-700"></div>

                    <div class="w-16 h-16 bg-yellow-500 rounded-2xl flex items-center justify-center mb-6 text-emerald-900 shadow-lg transform group-hover:rotate-12 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold mb-4 border-b-2 border-yellow-500 pb-2 inline-block">Visi Madrasah</h3>
                    <p class="text-emerald-50 text-lg italic leading-relaxed font-light">
                        "Terwujudnya Peserta Didik yang Beriman, Cerdas, Terampil, dan Berakhlak Mulia."
                    </p>
                </div>

                <div class="lg:col-span-2 bg-white p-6 md:p-8 rounded-3xl shadow-lg border border-gray-100">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-2 bg-emerald-100 rounded-lg text-emerald-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                        </div>
                        <h3 class="text-emerald-900 font-bold text-xl">Misi Madrasah</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 text-sm text-gray-600">
                        <div class="flex gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <p>Menyelenggarakan pendidikan dan pembelajaran yang unggul dengan menggunakan teknologi berbasis digital (Wujud Cinta Ilmu).</p>
                        </div>
                        <div class="flex gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <p>Menggali dan mengembangkan potensi peserta didik di bidang non akademik dengan kreativitas (Wujud Cinta Sesama).</p>
                        </div>
                        <div class="flex gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <p>Menyelenggarakan pembelajaran aktif, menyenangkan, dan peduli alam sekitar (Wujud Cinta Lingkungan).</p>
                        </div>
                        <div class="flex gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <p>Mengajarkan dan mempraktekkan ajaran Islam sesuai Al-Qur’an dan Hadits (Wujud Cinta Allah & Rasul).</p>
                        </div>
                        <div class="flex gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <p>Menyelenggarakan kegiatan intrakurikuler dan ekstrakurikuler untuk membentuk akhlaqul karimah.</p>
                        </div>
                         <div class="flex gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <p>Mengembangkan sifat religius, jujur, toleransi, dan tanggung jawab dalam keseharian.</p>
                        </div>
                         <div class="flex gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <p>Menciptakan suasana madrasah yang islami, damai, dan berkarakter.</p>
                        </div>
                        <div class="flex gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <p>Membina hubungan harmonis antar warga sekolah dengan saling menghargai.</p>
                        </div>
                         <div class="flex gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <p>Menciptakan lingkungan madrasah yang bersih, nyaman, dan kondusif.</p>
                        </div>
                         <div class="flex gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <p>Menumbuhkan sikap rukun dan berinteraksi dengan budaya tanpa meninggalkan nilai luhur bangsa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-emerald-900 py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">150+</div>
                    <div class="text-xs md:text-sm opacity-80">Siswa</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">12+</div>
                    <div class="text-xs md:text-sm opacity-80">Guru & Pembimbing</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">10+</div>
                    <div class="text-xs md:text-sm opacity-80">Ekstrakurikuler<br><span class="hidden md:inline">(Marawis, Pramuka, dll)</span></div>
                </div>
                <div>
                    <div class="text-lg md:text-2xl font-bold text-yellow-400 mb-2 mt-1 md:mt-0 uppercase">Terakreditasi</div>
                    <div class="text-xs md:text-sm opacity-80">Badan Akreditasi Nasional</div>
                </div>
            </div>
        </div>
    </section>
@endsection
