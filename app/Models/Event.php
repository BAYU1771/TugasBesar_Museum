<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Tentukan nama tabel, jika tidak mengikuti konvensi plural (misalnya 'event' -> 'events')
    protected $table = 'events';

    // Tentukan kolom yang bisa diisi menggunakan mass assignment
    protected $fillable = ['nama_event', 'deskripsi', 'tanggal_mulai', 'tanggal_selesai'];
}
