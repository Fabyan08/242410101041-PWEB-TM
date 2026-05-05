@extends('layouts.dashboard.app')

@section('title', 'Kelola Data Ruang Perpustakaan')

@section('content')
    <main class="flex-1 h-full overflow-y-auto pt-16 lg:pt-0">
        <div class="p-6 md:p-8 lg:p-10 max-w-7xl mx-auto">
            <header class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-slate-800">
                        Manajemen Data Ruang
                    </h1>
                    <p class="text-sm text-slate-400 mt-1">
                        Daftar master ruangan perpustakaan, status ketersediaan, dan fasilitas.
                    </p>
                </div>

                <div class="flex items-center gap-4 w-full md:w-auto">
                    <button
                        class="flex items-center justify-center gap-2 bg-orange-500 hover:bg-orange-600 text-white px-5 py-2.5 rounded-full text-sm font-semibold transition shadow-md shadow-orange-200">
                        <i data-lucide="plus-circle" class="w-4 h-4"></i>
                        Tambah Ruang Baru
                    </button>
                </div>
            </header>

            {{-- Statistik Ruang --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <x-dashboard.stat-card judul="Total Ruang" ikon="door-open" warna="blue" id="stat-total-room"
                    nilai="12" />
                <x-dashboard.stat-card judul="Tersedia" ikon="check-circle" warna="emerald" id="stat-available-room"
                    nilai="8" />
                <x-dashboard.stat-card judul="Sedang Dipakai" ikon="user-check" warna="orange" id="stat-occupied-room"
                    nilai="4" />
            </div>

            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                {{-- Toolbar Tabel --}}
                <div
                    class="p-5 border-b border-slate-100 bg-slate-50/50 flex flex-col md:flex-row gap-4 justify-between items-center">
                    <div class="relative w-full md:w-96">
                        <i data-lucide="search" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400"></i>
                        <input type="text" placeholder="Cari nama ruang atau kode..."
                            class="w-full bg-white border border-slate-200 rounded-xl py-2 pl-10 pr-4 text-sm focus:outline-none focus:ring-2 focus:ring-orange-200 transition-all" />
                    </div>

                </div>

                {{-- Tabel Kelola Ruang --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left border-collapse">
                        <thead
                            class="bg-slate-50 text-slate-600 font-semibold text-xs uppercase tracking-wider border-b border-slate-200">
                            <tr>
                                <th class="px-6 py-4">Informasi Ruang</th>
                                <th class="px-6 py-4">Kapasitas</th>
                                <th class="px-6 py-4">Fasilitas</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse ($daftar_ruang as $ruang)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-slate-800">{{ $ruang['nama'] }}</div>
                                        <div class="text-xs text-slate-400">Lantai {{ $ruang['lantai'] }} •
                                            {{ $ruang['kode'] }}</div>
                                    </td>


                                    <td class="px-6 py-4">
                                        <span class="flex items-center gap-1.5 text-slate-600">
                                            <i data-lucide="users" class="w-4 h-4 text-slate-400"></i>
                                            {{ $ruang['kapasitas'] }} Orang
                                        </span>
                                    </td>


                                    <td class="px-6 py-4">
                                        <div class="flex gap-1 flex-wrap">
                                            @foreach ($ruang['fasilitas'] as $item)
                                                <span class="px-2 py-0.5 bg-slate-100 text-slate-500 rounded text-[10px]">
                                                    {{ $item }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </td>


                                    <td class="px-6 py-4">
                                        @php
                                            $color =
                                                [
                                                    'Tersedia' => 'bg-emerald-100 text-emerald-700',
                                                    'Terpakai' => 'bg-orange-100 text-orange-700',
                                                    'Pemeliharaan' => 'bg-red-100 text-red-700',
                                                ][$ruang['status']] ?? 'bg-slate-100 text-slate-700';
                                        @endphp
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $color }}">
                                            {{ $ruang['status'] }}
                                        </span>
                                    </td>


                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button
                                                class="p-2 text-slate-400 hover:text-orange-500 hover:bg-orange-50 rounded-lg transition">
                                                <i data-lucide="edit-3" class="w-4 h-4"></i>
                                            </button>
                                            <button
                                                class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition">
                                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty

                                <tr>
                                    <td colspan="5" class="px-6 py-10 text-center">
                                        <div class="flex flex-col items-center justify-center text-slate-400">
                                            <i data-lucide="folder-open" class="w-12 h-12 mb-3 opacity-20"></i>
                                            <p>Belum ada data ruangan yang terdaftar.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination Dummy --}}
                <div
                    class="px-6 py-4 bg-slate-50/50 border-t border-slate-100 flex items-center justify-between text-sm text-slate-500">
                    <span>Menampilkan 1 sampai 3 dari 12 Ruangan</span>
                    <div class="flex gap-2">
                        <button
                            class="px-3 py-1 border border-slate-200 rounded-lg bg-white hover:bg-slate-50 transition">Prev</button>
                        <button class="px-3 py-1 bg-orange-500 text-white rounded-lg shadow-sm">1</button>
                        <button
                            class="px-3 py-1 border border-slate-200 rounded-lg bg-white hover:bg-slate-50 transition">2</button>
                        <button
                            class="px-3 py-1 border border-slate-200 rounded-lg bg-white hover:bg-slate-50 transition">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
