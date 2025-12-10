@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
    <div class="bg-emerald-800 py-12 text-center text-white">
        <h1 class="text-4xl font-bold">Hubungi Kami</h1>
        <p class="mt-2 text-emerald-100">Kami siap melayani informasi Pendaftaran & Akademik</p>
    </div>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <div>
                    <h2 class="text-2xl font-bold text-emerald-900 mb-6">Informasi Sekolah</h2>

                    <div class="space-y-6 mb-8">
                        <div class="flex items-start gap-4">
                            <div class="bg-yellow-100 p-3 rounded-full text-yellow-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Alamat</h4>
                                <p class="text-gray-600">Jl. Kalibaru Barat IV No. 39 RT.009/006<br>Kel. Kalibaru, Kec. Cilincing, Jakarta Utara</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-yellow-100 p-3 rounded-full text-yellow-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Telepon / WhatsApp</h4>
                                <p class="text-gray-600">(021) 555-0123 / 0812-3456-7890</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-yellow-100 p-3 rounded-full text-yellow-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Email</h4>
                                <p class="text-gray-600">info@mis-ashshiddiqin.sch.id</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl overflow-hidden shadow-lg border border-gray-200 h-64 w-full">
                        <iframe
                            width="100%"
                            height="100%"
                            frameborder="0"
                            scrolling="no"
                            marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?q=Jl.+Kalibaru+Barat+IV+No.+39,+Cilincing,+Jakarta+Utara&t=&z=15&ie=UTF8&iwloc=&output=embed">
                        </iframe>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-2xl shadow-inner">
                    <h2 class="text-2xl font-bold text-emerald-900 mb-2">Kirim Pesan</h2>
                    <p class="text-gray-500 mb-6">Punya pertanyaan seputar PPDB atau kegiatan sekolah? Tulis pesan Anda di sini.</p>

                    <form action="#" method="POST"> @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500" placeholder="Masukkan nama Anda">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-gray-700 font-bold mb-2">Email</label>
                                <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-emerald-500" placeholder="email@contoh.com">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-bold mb-2">No. WhatsApp</label>
                                <input type="number" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-emerald-500" placeholder="0812...">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">Subjek</label>
                            <select class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-emerald-500 bg-white">
                                <option>Info Pendaftaran Siswa Baru (PPDB)</option>
                                <option>Informasi Akademik</option>
                                <option>Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 font-bold mb-2">Pesan</label>
                            <textarea rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-emerald-500" placeholder="Tulis pesan Anda..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-emerald-700 hover:bg-emerald-800 text-white font-bold py-3 rounded-lg transition transform hover:scale-[1.02] shadow-lg">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
