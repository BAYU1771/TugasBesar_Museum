<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Menampilkan daftar tentang museum.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Data statis sebagai pengganti query ke database
        $about = [
            'title' => 'Tentang Kami',
            'description' => 'Ini adalah deskripsi tentang museum kami. Museum ini didedikasikan untuk melestarikan sejarah dan budaya lokal.',
            'image' => null, // Jika Anda ingin menambahkan gambar statis, masukkan path-nya di sini
        ];

        return view('about.index', compact('about'));
    }

    /**
     * Menampilkan form untuk membuat data tentang museum baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Menyimpan data tentang museum yang baru dibuat.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Karena Anda tidak menggunakan database, bagian ini hanya validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan data ke session atau file jika diperlukan
        // Untuk sementara, hanya redirect ke halaman index
        return redirect()->route('about.index')->with('success', 'Data About berhasil disimpan (simulasi tanpa database)!');
    }

    /**
     * Menampilkan data tentang museum berdasarkan ID.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Data statis sebagai contoh
        $about = [
            'title' => 'Tentang Kami',
            'description' => 'Ini adalah deskripsi tentang museum kami.',
            'image' => null,
        ];

        return view('about.show', compact('about'));
    }

    /**
     * Menampilkan form untuk mengedit data tentang museum.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // Data statis untuk ditampilkan di form edit
        $about = [
            'title' => 'Tentang Kami',
            'description' => 'Ini adalah deskripsi tentang museum kami.',
            'image' => null,
        ];

        return view('about.edit', compact('about'));
    }

    /**
     * Memperbarui data tentang museum yang telah ada.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Karena tidak menggunakan database, simpan data ke file atau session jika diperlukan
        return redirect()->route('about.index')->with('success', 'Data About berhasil diperbarui (simulasi tanpa database)!');
    }

    /**
     * Menghapus data tentang museum berdasarkan ID.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        // Karena tidak menggunakan database, hanya redirect sebagai simulasi
        return redirect()->route('about.index')->with('success', 'Data About berhasil dihapus (simulasi tanpa database)!');
    }
}
