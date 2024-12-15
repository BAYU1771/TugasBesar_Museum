@extends('layouts.app')

@section('title', 'Tambah Event')

@section('content')
<div class="container">
    <div class="card shadow-lg p-4" style="border-radius: 16px; background-color: #f9f9f9;">
        <h1 class="text-center mb-4" style="color: #007BFF; font-size: 2.5em;">Tambah Event Baru</h1>
        <form action="/event" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_event" class="form-label" style="font-weight: bold; font-size: 1.1em;">Nama Event</label>
                <input type="text" name="nama_event" id="nama_event" class="form-control form-control-lg shadow-sm" placeholder="Masukkan nama event..." required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="form-label" style="font-weight: bold; font-size: 1.1em;">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control form-control-lg shadow-sm" rows="4" placeholder="Tulis deskripsi event..." required></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label for="tanggal_mulai" class="form-label" style="font-weight: bold; font-size: 1.1em;">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control form-control-lg shadow-sm" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="tanggal_selesai" class="form-label" style="font-weight: bold; font-size: 1.1em;">Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control form-control-lg shadow-sm" required>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-lg px-5 shadow" style="border-radius: 50px; font-size: 1.2em;">Simpan</button>
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

    .btn-success {
        background-color: #28a745;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(40, 167, 69, 0.3);
    }

    .btn-success:hover {
        background-color: #218838;
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(40, 167, 69, 0.4);
    }

    .btn-success:active {
        transform: translateY(1px);
        box-shadow: 0 3px 6px rgba(40, 167, 69, 0.3);
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
