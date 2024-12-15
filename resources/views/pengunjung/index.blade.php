@extends('layouts.app')

@section('title', 'Pengunjung Museum')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-center" style="color: #e0e8f0; font-size: 3em; font-family: 'Merriweather', serif;">Daftar Pengunjung</h1>
        <a href="/pengunjung/create" class="btn btn-dark btn-lg" style="border-radius: 50px;">Tambah Pengunjung</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow" style="border-radius: 8px; overflow: hidden;">
            <thead class="thead-dark">
                <tr>
                    <th style="background-color: #2C3E50; color: white; text-align: center;">#</th>
                    <th style="background-color: #2C3E50; color: white; text-align: center;">Nama</th>
                    <th style="background-color: #2C3E50; color: white; text-align: center;">Email</th>
                    <th style="background-color: #2C3E50; color: white; text-align: center;">No HP</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengunjungs as $pengunjung)
                <tr style="background-color: #f9f9f9; transition: all 0.3s ease;">
                    <td style="text-align: center;">{{ $loop->iteration }}</td>
                    <td>{{ $pengunjung->nama }}</td>
                    <td>{{ $pengunjung->email }}</td>
                    <td>{{ $pengunjung->no_hp }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    body {
        background-image: url("/images/museum1.png");
        background-color: #f4f7f6;
        font-family: 'Roboto', sans-serif;
        color: #333;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;
        position: relative;
        z-index: 0;
    }

    body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Overlay gelap */
        z-index: -1;
    }

    /* Container */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px;
    }

    /* Tabel */
    .table {
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        margin-top: 20px;
    }

    .table th, .table td {
        padding: 15px 20px;
        text-align: left;
        font-size: 1.1em;
    }

    .table thead th {
        text-transform: uppercase;
        font-size: 1em;
        letter-spacing: 0.03em;
        background-color: #2C3E50;
        color: white;
        border: none;
    }

    .table tbody tr:hover {
        background-color: #e9f5ff; /* Warna highlight saat hover */
        cursor: pointer;
    }

    .table-bordered {
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    /* Tombol */
    .btn-dark {
        background-color: #2C3E50;
        color: #fff;
        padding: 12px 30px;
        font-size: 1.2em;
        transition: all 0.3s ease;
        border-radius: 50px;
    }

    .btn-dark:hover {
        background-color: #34495E;
        transform: translateY(-2px);
    }

    /* Efek Hover pada Tabel */
    .table tbody tr td {
        color: #555;
    }

    .table tbody tr:hover td {
        font-weight: bold; /* Memberikan efek bold saat hover */
    }

    .table-responsive {
        border-radius: 8px; /* Membuat tabel lebih halus pada tepi */
        overflow: hidden;
    }

    .table tbody tr td {
        font-size: 1em;
        color: #333;
    }

    /* Pesan jika kosong */
    .alert {
        background-color: #e0e8f0;
        border: none;
        color: #2C3E50;
        border-radius: 10px;
        padding: 20px;
    }
</style>

@endsection
