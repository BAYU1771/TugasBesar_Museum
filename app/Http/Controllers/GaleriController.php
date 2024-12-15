<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        // Mengambil semua data galeri dari database
        $galeris = Galeri::all();
        // Mengembalikan tampilan galeri dengan data yang telah diambil
        return view('galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_koleksi' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|nullable|max:10048',
        ]);

        // Menyimpan data galeri baru
        $path = $request->file('foto') ? $request->file('foto')->store('galeri') : null;

        Galeri::create([
            'nama_koleksi' => $request->nama_koleksi,
            'deskripsi' => $request->deskripsi,
            'foto' => $path,
        ]);

        return redirect('/galeri');
    }
}
