<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    // Menambahkan properti fillable untuk mengizinkan mass assignment
    protected $fillable = [
        'nama_koleksi',
        'deskripsi',
        'foto', // Jika Anda ingin mengizinkan upload foto
    ];
}

