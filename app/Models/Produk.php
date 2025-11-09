<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Menentukan kolom mana yang bisa diisi (mass assignment)
    protected $fillable = [
        'nama',
        'deskripsi',
        'kategori',
        'harga',
        'gambar',
    ];
}
