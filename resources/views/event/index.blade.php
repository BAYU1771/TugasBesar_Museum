@extends('layouts.app')

@section('title', 'Daftar Event')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-center" style="color: #e0e8f0; font-size: 3em; font-family: 'Merriweather', serif;">Daftar Event</h1>
        <a href="{{ route('event.create') }}" class="btn btn-dark btn-lg" style="border-radius: 50px;">Tambah Event</a>
    </div>
    
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Merriweather:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <div class="row">
        @foreach($events as $event)
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg rounded h-100" style="border: none; background-color: #ffffff;"> 
                <div class="card-body d-flex flex-column" style="padding: 20px; background-color: #ffffff;">
                    <h5 class="card-title" style="color: #2C3E50; font-size: 1.5em; margin-bottom: 15px; font-family: 'Lora', serif;">
                        {{ $event->nama_event }}
                    </h5>
                    <div class="card-text" style="color: #555; font-size: 1em; line-height: 1.6; font-family: 'Roboto', sans-serif;">
                        {{ Str::limit($event->deskripsi, 120) }}
                    </div>
                    <p style="margin-top: 15px; font-size: 1em; color: #34495E;">
                        <strong>Tanggal Mulai:</strong> {{ $event->tanggal_mulai }}<br>
                        <strong>Tanggal Selesai:</strong> {{ $event->tanggal_selesai }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if($events->isEmpty())
        <div class="alert alert-info text-center" style="font-family: 'Roboto', sans-serif; font-size: 1.2em; color: #2C3E50;">
            Belum ada event yang tersedia.
        </div>
    @endif
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
        background-color: rgba(0, 0, 0, 0.5); 
        z-index: -1; 
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px;
    }

    .card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-10px); 
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15); 
    }

    .card-title {
        font-family: 'Lora', serif;
        font-size: 1.5em;
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
        transform: translateY(-2px); 
    }

    .alert {
        background-color: #e0e8f0;
        border: none;
        color: #2C3E50;
        border-radius: 10px;
        padding: 20px;
    }
</style>

@endsection
