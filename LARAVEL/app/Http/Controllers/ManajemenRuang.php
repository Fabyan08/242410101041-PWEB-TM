<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenRuang extends Controller
{
    public function index()
    {
        $daftar_ruang = [
            [
                'nama' => 'Ruang Diskusi A1',
                'lantai' => '1',
                'kode' => 'R-A101',
                'kapasitas' => 6,
                'fasilitas' => ['WiFi', 'AC', 'Proyektor'],
                'status' => 'Tersedia'
            ],
            [
                'nama' => 'Ruang Multimedia',
                'lantai' => '3',
                'kode' => 'R-M302',
                'kapasitas' => 10,
                'fasilitas' => ['WiFi', 'PC Aktif', 'Sound System'],
                'status' => 'Terpakai'
            ],
            [
                'nama' => 'Ruang Tenang (VIP)',
                'lantai' => '2',
                'kode' => 'R-V204',
                'kapasitas' => 2,
                'fasilitas' => ['E-Library Access', 'AC'],
                'status' => 'Pemeliharaan'
            ],
        ];

        return view('dashboard.manajemen-ruang.index', compact('daftar_ruang'));
    }
}
