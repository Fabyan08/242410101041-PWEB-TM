<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManajemenMahasiswa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $mahasiswa = Mahasiswa::where('user_id', auth()->id())
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                        ->orWhere('nim', 'like', "%{$search}%");
                });
            })->paginate(10);

        $mahasiswa->appends(['search' => $search]);

        return view('dashboard.manajemen-mahasiswa.index', compact('mahasiswa', 'search'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.manajemen-mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:150',
            'nim' => 'required|string|max:20|min:10|unique:mahasiswa,nim',
            'fakultas' => 'required|string|max:100',
            'email' => 'required|email|max:150|unique:mahasiswa,email',
            'status' => 'required|in:Aktif,Suspended,Cuti,Lulus',
            'foto' => 'nullable|mimes:jpeg,png,jpg,webp|max:2048', // Validasi foto
        ]);
        $validated['user_id'] = auth()->id();
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('mahasiswa', 'public');
        }
        Mahasiswa::create($validated);

        return redirect()->route('manajemen-mahasiswa')
            ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('dashboard.manajemen-mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('dashboard.manajemen-mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Memproses pembaruan data ke database.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:150',
            'nim' => 'required|string|max:20|min:10|unique:mahasiswa,nim,' . $mahasiswa->id,
            'fakultas' => 'required|string|max:100',
            'email' => 'required|email|max:150|unique:mahasiswa,email,' . $mahasiswa->id,
            'status' => 'required|in:Aktif,Suspended,Cuti,Lulus',
            'foto' => 'nullable|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($mahasiswa->foto) {
                Storage::disk('public')->delete($mahasiswa->foto);
            }
            $validated['foto'] = $request->file('foto')->store('mahasiswa', 'public');
        }

        $mahasiswa->update($validated);

        return redirect()->route('manajemen-mahasiswa')
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('manajemen-mahasiswa')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
