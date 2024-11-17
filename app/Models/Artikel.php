<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan model ini
    protected $table = 'artikels';

    // Daftar kolom yang bisa diisi
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'nama_pembuat',
        'created_at',
        'updated_at',
    ];

}
