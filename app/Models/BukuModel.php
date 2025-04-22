<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    protected $table = 'buku'; // Nama tabel sesuai database
    protected $primaryKey = 'buku_id'; // Primary key tabel buku
    public $timestamps = false; // Jika tabel tidak memiliki created_at dan updated_at

    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit',
        'stok',
    ];
    use HasFactory;
}
