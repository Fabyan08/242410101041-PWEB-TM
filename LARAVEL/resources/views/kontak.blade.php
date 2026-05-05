@extends('layouts.app')

@section('title', 'Kontak | LibMate Universitas Jember')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-pattern pointer-events-none"></div>
        <div
            class="absolute top-20 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-orange-400/20 rounded-full blur-3xl -z-10 pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-50 border border-orange-100 text-orange-600 text-sm font-semibold mb-6">
                <span>Hubungi Kami</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight mb-6">
                Kami Siap Membantu<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-400">Diskusi
                    Anda.</span>
            </h1>
            <p class="mt-4 text-lg md:text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Punya pertanyaan tentang LIBMATE atau kendala saat memesan ruangan? Jangan ragu untuk menghubungi tim kami.
            </p>
        </div>
    </section>

    <!-- Contact Info & Form Section -->
    <section class="py-16 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Info Kolom -->
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-6">Informasi Kontak</h2>
                    <p class="text-slate-600 leading-relaxed mb-10">
                        Tim teknis dan administrasi LIBMATE tersedia untuk mendukung kelancaran kegiatan akademik Anda di
                        Perpustakaan Universitas Jember.
                    </p>

                    <div class="space-y-8">
                        <div class="flex gap-5">
                            <div
                                class="flex-shrink-0 w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center text-orange-500 shadow-sm">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">Lokasi</h3>
                                <p class="text-slate-600 mt-1">Gedung Perpustakaan Pusat, Universitas Jember.<br>Jl.
                                    Kalimantan No. 37, Jember, Jawa Timur.</p>
                            </div>
                        </div>

                        <div class="flex gap-5">
                            <div
                                class="flex-shrink-0 w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center text-orange-500 shadow-sm">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">Email</h3>
                                <p class="text-slate-600 mt-1">support.libmate@unej.ac.id</p>
                                <p class="text-slate-600 text-sm italic mt-1">Waktu respon: Kurang dari 24 jam.</p>
                            </div>
                        </div>

                        <div class="flex gap-5">
                            <div
                                class="flex-shrink-0 w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center text-orange-500 shadow-sm">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">Jam Operasional</h3>
                                <p class="text-slate-600 mt-1">Senin - Jumat: 08:00 - 20:00 WIB</p>
                                <p class="text-slate-600 mt-1">Sabtu - Minggu: Tutup (Layanan Online)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Kolom -->
                <div class="relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-orange-400 to-orange-500 rounded-3xl blur opacity-20 transition duration-1000">
                    </div>
                    <div class="relative bg-white p-8 md:p-10 rounded-3xl ring-1 ring-slate-900/5 shadow-2xl">
                        <form action="#" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-900">Nama Lengkap</label>
                                    <input type="text" placeholder="Masukkan nama"
                                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border-transparent focus:bg-white focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all outline-none">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-900">Email Mahasiswa</label>
                                    <input type="email" placeholder="nim@mail.unej.ac.id"
                                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border-transparent focus:bg-white focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all outline-none">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-900">Subjek</label>
                                <input type="text" placeholder="Tujuan pesan"
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border-transparent focus:bg-white focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all outline-none">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-900">Pesan</label>
                                <textarea rows="4" placeholder="Tuliskan pesan Anda..."
                                    class="w-full px-4 py-3 rounded-xl bg-slate-50 border-transparent focus:bg-white focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all outline-none resize-none"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full py-4 rounded-2xl bg-orange-600 text-white font-bold hover:bg-orange-500 hover:shadow-lg hover:shadow-orange-500/30 transition-all transform hover:-translate-y-1">
                                Kirim Pesan Sekarang
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
