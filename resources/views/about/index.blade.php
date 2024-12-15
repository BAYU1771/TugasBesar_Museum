@extends('layouts.app')

@section('title', 'About Museum')

@section('content')
<div class="container py-5">
    <!-- Judul tentang kami -->
    <div class="card shadow-lg p-5 mb-4" style="border-radius: 16px; background-color: #f7f9fc;">
        <h1 class="text-center mb-4" style="color: #007BFF; font-size: 2.5em; font-weight: bold;">Tentang Kami</h1>
        <p class="text-center" style="font-size: 1.3em; color: #555;">
            Museum ini didedikasikan untuk melestarikan sejarah dan budaya, serta menampilkan berbagai koleksi berharga yang menggambarkan kekayaan warisan kita. Kunjungi kami untuk menemukan lebih banyak!
        </p>
    </div>

    <!-- Daftar Tentang Dua Orang -->
    <div class="row">
        <!-- Orang 1 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg p-4" style="border-radius: 16px; border: 2px solid #007BFF;">
                <div class="text-center">
                    <img src="{{ asset('images/bayu.jpg') }}" alt="Pembuat Website 1" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #007BFF; transition: transform 0.3s ease;">
                    <p class="mt-3" style="font-size: 1.3em; color: #007BFF;"><strong>Bayu Firdaus</strong></p>
                    <p style="font-size: 1.1em; color: #777;">Pengembang Website dan Desainer UI/UX. Bayu bertanggung jawab untuk merancang dan mengembangkan website museum ini agar lebih interaktif dan menarik</p>
                    <!-- NIM dan Kelas untuk Bayu -->
                    <p class="nim-class" style="font-size: 1.1em; color: #555;">NIM: C030323132 | Kelas: TI-3 Axioo</p>
                </div>
            </div>
        </div>

        <!-- Orang 2 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg p-4" style="border-radius: 16px; border: 2px solid #007BFF;">
                <div class="text-center">
                    <img src="{{ asset('images/nugeh.jpg') }}" alt="Pembuat Website 2" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #007BFF; transition: transform 0.3s ease;">
                    <p class="mt-3" style="font-size: 1.3em; color: #007BFF;"><strong>Anugrah</strong></p>
                    <p style="font-size: 1.1em; color: #777;">Pengembang Website dan Desainer UI/UX. Anugrah bertanggung jawab untuk merancang dan mengembangkan website museum ini agar lebih interaktif dan menarik</p>
                    <!-- NIM dan Kelas untuk Anugrah -->
                    <p class="nim-class" style="font-size: 1.1em; color: #555;">NIM: C030323138 | Kelas: TI-3 Axioo</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section with NIM and Class -->
<div class="footer-text">
    <p>Created by <strong>ChatGPT</strong></p>
    <p class="sponsored">Axioo</p>
</div>

<!-- Add custom CSS for hover effects and image scaling -->
@section('styles')
    <style>
        .card:hover {
            box-shadow: 0 0 15px rgba(0, 123, 255, 0.2);
            transform: translateY(-10px);
        }

        .img-fluid:hover {
            transform: scale(1.1);
        }
    </style>
@endsection

@endsection