<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;

class PengunjungController extends Controller
{
    public function index()
    {
        $pengunjungs = Pengunjung::all();
        return view('pengunjung.index', compact('pengunjungs'));
    }

    public function create()
    {
        return view('pengunjung.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pengunjungs',
            'no_hp' => 'required',
        ]);

        Pengunjung::create($request->all());
        return redirect('/pengunjung');
    }
}

