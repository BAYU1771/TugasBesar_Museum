<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    // Tentukan nama tabel, jika tidak mengikuti konvensi plural (misalnya 'pengunjung' -> 'pengunjungs')
    protected $table = 'pengunjungs';

    // Tentukan kolom yang bisa diisi menggunakan mass assignment
    protected $fillable = ['nama', 'email', 'no_hp'];
}

