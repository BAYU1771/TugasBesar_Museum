@extends('layouts.app')

@section('title', 'Tambah Pengunjung')

@section('content')
<div class="container">
    <div class="card shadow-lg p-5" style="border-radius: 16px; background-color: #f9f9f9;">
        <h1 class="text-center mb-4" style="color: #007BFF; font-size: 2.5em;">Tambah Pengunjung Baru</h1>
        <form action="/pengunjung" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama" class="form-label" style="font-weight: bold; font-size: 1.1em;">Nama Pengunjung</label>
                <input type="text" name="nama" id="nama" class="form-control form-control-lg shadow-sm" placeholder="Masukkan nama pengunjung..." required>
            </div>
            <div class="mb-4">
                <label for="email" class="form-label" style="font-weight: bold; font-size: 1.1em;">Email</label>
                <input type="email" name="email" id="email" class="form-control form-control-lg shadow-sm" placeholder="Masukkan email pengunjung..." required>
            </div>
            <div class="mb-4">
                <label for="no_hp" class="form-label" style="font-weight: bold; font-size: 1.1em;">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control form-control-lg shadow-sm" placeholder="Masukkan nomor HP pengunjung..." required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg px-5 shadow" style="border-radius: 50px; font-size: 1.2em;">Simpan Pengunjung</button>
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
