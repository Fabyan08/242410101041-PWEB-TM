<footer class="bg-slate-50 pt-16 pb-8 border-t border-slate-200 text-slate-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="md:col-span-2">
                <img src="Libmate.png" width="100" class="pb-2" alt="" />
                <p class="text-sm text-slate-500 max-w-sm mb-6 leading-relaxed">
                    Sistem Pemesanan Ruang Diskusi Perpustakaan dengan AI resmi untuk
                    Universitas Jember. Membuat kehidupan belajar di kampus menjadi
                    lebih mudah.
                </p>
            </div>

            <div>
                <h4 class="font-bold text-slate-900 mb-4">Menu</h4>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="/" class="hover:text-orange-600 transition-colors">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('tentang') }}" class="hover:text-orange-600 transition-colors">Tentang Kami</a>
                    </li>

                    <li>
                        <a href="{{ route('dashboard') }}" class="hover:text-orange-600 transition-colors">Dashboard</a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-slate-900 mb-4">Bantuan</h4>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="#" class="hover:text-orange-600 transition-colors">Pusat Bantuan</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-orange-600 transition-colors">Aturan Perpustakaan</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-orange-600 transition-colors">Hubungi Admin</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-slate-400">
                &copy; 2026 LibMate - Perpustakaan Universitas Jember. Hak Cipta
                Dilindungi.
            </p>
            <div class="flex space-x-4 text-sm text-slate-400">
                <a href="#" class="hover:text-slate-600">Kebijakan Privasi</a>
                <a href="#" class="hover:text-slate-600">Syarat Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

<div class="fixed bottom-6 right-6 z-[100] flex flex-col items-end">
    <div id="floating-chat"
        class="mb-4 w-[320px] md:w-[350px] bg-slate-800 rounded-2xl shadow-2xl border border-slate-700 overflow-hidden transform scale-95 opacity-0 pointer-events-none transition-all duration-300 origin-bottom-right">
        <div class="bg-gradient-to-r from-orange-600 to-orange-600 p-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="relative">
                    <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow-lg">
                        <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 border-2 border-slate-800 rounded-full">
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-semibold text-sm">LibMate AI</h4>
                    <p class="text-orange-100 text-xs">Selalu Siap Membantu</p>
                </div>
            </div>

            <button onclick="toggleChat()"
                class="text-white hover:text-orange-200 transition-colors focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div class="p-4 h-64 overflow-y-auto bg-slate-900 flex flex-col gap-4">
            <div class="flex justify-start">
                <div
                    class="bg-slate-800 border border-slate-700 text-slate-200 rounded-2xl rounded-tl-sm px-4 py-3 text-sm max-w-[90%] leading-relaxed">
                    Halo! 👋 Saya Asisten AI LibMate. Ada yang bisa saya bantu hari
                    ini? Anda bisa menanyakan ruang kosong atau meminta rekomendasi
                    jadwal.
                </div>
            </div>

            <div class="flex flex-col gap-2 items-start mt-1">
                <button
                    class="bg-slate-800 border border-orange-500/30 text-orange-300 text-xs py-2 px-3 rounded-xl hover:bg-orange-600 hover:text-white transition-colors text-left w-full shadow-sm">
                    Cari ruang tenang untuk 2 orang
                </button>
                <button
                    class="bg-slate-800 border border-orange-500/30 text-orange-300 text-xs py-2 px-3 rounded-xl hover:bg-orange-600 hover:text-white transition-colors text-left w-full shadow-sm">
                    Apa saja fasilitas di Ruang 3A?
                </button>
            </div>
        </div>

        <div class="p-3 bg-slate-800 border-t border-slate-700 flex gap-2">
            <input type="text" placeholder="Ketik pesan..."
                class="flex-1 bg-slate-900 text-sm text-white placeholder-slate-400 rounded-full py-2 px-4 border border-slate-700 focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 transition-colors" />
            <button
                class="w-10 h-10 bg-orange-600 rounded-full flex items-center justify-center text-white hover:bg-orange-500 transition-colors shrink-0 shadow-md">
                <svg class="w-4 h-4 ml-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
            </button>
        </div>
    </div>

    <button onclick="toggleChat()" id="chat-fab"
        class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full shadow-2xl shadow-orange-500/40 flex items-center justify-center text-white hover:scale-110 hover:-translate-y-1 transition-all duration-300 relative group border-2 border-white/20 focus:outline-none focus:ring-4 focus:ring-orange-500/30 z-50">
        <svg class="w-6 h-6 transform transition-transform group-hover:-rotate-12" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
            </path>
        </svg>

        <span class="absolute top-0 right-0 flex h-3.5 w-3.5">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-red-500 border-2 border-white"></span>
        </span>
    </button>
</div>
