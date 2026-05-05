@extends('layouts.app')

@section('title', 'Home | LibMate Universitas Jember')

@section('content')

    <section class="bg-gradient-to-b pt-32 from-orange-50 to-white py-12">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img id="mainImage" src="{{ asset('/perpus/' . $ruangan->gambar) }}" class="w-full h-full object-cover">
            </div>

            <div>
                <span class="text-sm bg-orange-100 text-orange-600 px-3 py-1 rounded-full font-semibold">
                    {{ $ruangan->kategori }}
                </span>

                <h1 class="text-4xl font-bold text-slate-900 mt-4 mb-3">
                    {{ $ruangan->nama_ruang }}
                </h1>


                <div class="space-y-3 mb-6">
                    <div class="flex items-center gap-3 text-slate-700">
                        Lantai {{ $ruangan->lantai }}
                    </div>
                    <div class="flex items-center gap-3 text-slate-700">
                        Kapasitas {{ $ruangan->kapasitas }} Orang
                    </div>
                </div>

                <button
                    class="w-full md:w-auto px-6 py-3 bg-orange-500 text-white rounded-xl font-semibold hover:bg-orange-600 transition">
                    Booking Sekarang
                </button>
            </div>

        </div>
    </section>

@endsection
