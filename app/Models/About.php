<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    // Jika model ini tidak terkait dengan tabel di database
    protected $table = 'about';

    // Jika Anda ingin menggunakan kolom-kolom tertentu
    protected $fillable = ['title', 'description', 'image'];

    // Jika model ini tidak ada relasi dengan tabel database, Anda bisa menonaktifkan
    // penggunaan fitur Eloquent seperti timestamps:
    public $timestamps = false;
}
