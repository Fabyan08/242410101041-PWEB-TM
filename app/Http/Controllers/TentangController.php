<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $ruangans = Ruangan::all();
        return view('tentang', compact('ruangans'));
    }
    public function filterRuangan($lantai, $kapasitas)
    {

        $ruangans = Ruangan::where('lantai', $lantai)
            ->where('kapasitas', '>=', $kapasitas)
            ->get();

        return view('tentang', compact('ruangans', 'lantai', 'kapasitas'));
    }

    public function show($lantai, $id)
    {
        $ruangan = Ruangan::where('lantai', $lantai)->where('id', $id)->firstOrFail();
        return view('detail', compact('ruangan'));
    }
}
