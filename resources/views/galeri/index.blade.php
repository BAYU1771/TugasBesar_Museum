@extends('layouts.app')

@section('title', 'Galeri Museum')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-center" style="color: #e0e8f0; font-size: 3em; font-family: 'Merriweather', serif;">Galeri Museum</h1>
        <a href="{{ route('galeri.create') }}" class="btn btn-dark btn-lg" style="border-radius: 50px;">Tambah Koleksi</a>
    </div>
    
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Merriweather:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <div class="row">
        @foreach($galeris as $galeri)
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg rounded h-100"> <!-- Tinggi card dibuat fleksibel -->
                <img src="{{ $galeri->foto ? Storage::url($galeri->foto) : 'https://via.placeholder.com/150' }}" 
                    class="card-img-top" 
                    alt="Foto Koleksi" 
                    style="border-radius: 8px; height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column" style="background-color: #ffffff;">
                    <h5 class="card-title" style="color: #2C3E50; font-size: 1.5em; margin-bottom: 15px; font-family: 'Lora', serif;">
                        {{ $galeri->nama_koleksi }}
                    </h5>
                    <div class="card-text overflow-auto" style="flex-grow: 1; max-height: 180px; color: #555; font-size: 1em; line-height: 1.6; font-family: 'Roboto', sans-serif;">
                        {{ $galeri->deskripsi }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    body {
        background-image: url("/images/museum1.png");
        background-color: #f4f7f6;
        font-family: 'Roboto', sans-serif;
        color: #333;
        background-attachment: fixed; /* Latar belakang tetap diam saat di-scroll */
        background-position: center center; /* Posisi latar */
        background-size: cover; /* Menutupi seluruh layar */
        position: relative; /* Untuk pseudo-element */
        z-index: 0; /* Mengatur tumpukan */
    }

        body::before {
        content: ""; /* Dibutuhkan untuk pseudo-element */
        position: fixed; /* Tetap di posisi viewport */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Overlay warna hitam semi-transparan */
        z-index: -1; /* Tetap di belakang konten */
    }

    /* Container */
    .container {
        max-width: 1500px;
        margin: 0 auto;
        padding: 40px;
    }

    /* Card */
    .card {
        border: none;
        transition: all 0.3s ease-in-out;
        border-radius: 15px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Efek Hover pada Card */
    .card:hover {
        transform: translateY(-10px); /* Efek mengangkat */
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15); /* Bayangan lebih tajam */
    }

    .card-body {
        padding: 20px;
    }

    .card-text {
        text-align: justify; /* Rata kiri-kanan untuk teks deskripsi */
        padding-right: 12px; /* Tambahkan jarak antara teks dan scrollbar */
        line-height: 1.6; /* Jarak antar baris */
        max-width: 100%; /* Memastikan teks menggunakan seluruh lebar yang tersedia */
        word-wrap: break-word; /* Agar teks tidak keluar dari area card */
        overflow-y: auto; /* Scroll hanya untuk sumbu vertikal */
    }

    .card-title {
        font-size: 1.5em;
        font-family: 'Lora', serif;
        color: #2C3E50;
    }

    .btn-dark {
        background-color: #2C3E50;
        color: #fff;
        padding: 12px 30px;
        font-size: 1.2em;
        font-family: 'Roboto', sans-serif;
        transition: all 0.3s ease;
        border-radius: 50px;
    }

    .btn-dark:hover {
        background-color: #34495E;
        transform: translateY(-2px); /* Efek hover */
    }

    /* Custom Scrollbar untuk deskripsi */
    .overflow-auto::-webkit-scrollbar {
        width: 7px;
    }

    .overflow-auto::-webkit-scrollbar-thumb {
        background-color: #2C3E50;
        border-radius: 10px;
    }

    .overflow-auto::-webkit-scrollbar-track {
        background-color: #f1f1f1;
    }
</style>

@endsection
