@extends('layouts.app')

@section('title', 'Tambah Koleksi')

@section('content')
<div class="container">
    <div class="card shadow-lg p-5" style="border-radius: 16px; background-color: #f9f9f9;">
        <h1 class="text-center mb-4" style="color: #007BFF; font-size: 2.5em;">Tambah Koleksi Baru</h1>
        <form action="/galeri" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="nama_koleksi" class="form-label" style="font-weight: bold; font-size: 1.1em;">Nama Koleksi</label>
                <input type="text" name="nama_koleksi" id="nama_koleksi" class="form-control form-control-lg shadow-sm" placeholder="Masukkan nama koleksi..." required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="form-label" style="font-weight: bold; font-size: 1.1em;">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control form-control-lg shadow-sm" rows="4" placeholder="Tulis deskripsi koleksi..." required></textarea>
            </div>
            <div class="mb-4">
                <label for="foto" class="form-label" style="font-weight: bold; font-size: 1.1em;">Foto Koleksi</label>
                <input type="file" name="foto" id="foto" class="form-control form-control-lg shadow-sm">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg px-5 shadow" style="border-radius: 50px; font-size: 1.2em;">Simpan Koleksi</button>
            </div>
        </form>
    </div>
</div>

<style>
    body {
        background-color: #f4f7f6;
        font-family: 'Arial', sans-serif;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
    }

    .form-control {
        border: 2px solid #ddd;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
        border-color: #007BFF;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.2);
    }

    .btn-primary {
        background-color: #007BFF;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0, 123, 255, 0.4);
    }

    .btn-primary:active {
        transform: translateY(1px);
        box-shadow: 0 3px 6px rgba(0, 123, 255, 0.3);
    }

    .card {
        border: none;
    }

    label {
        color: #555;
    }

    h1 {
        font-family: 'Arial', sans-serif;
        font-weight: bold;
    }
</style>
@endsection
