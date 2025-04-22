<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    protected $table = 'peminjaman'; // Nama tabel sesuai dengan database Anda
    protected $primaryKey = 'peminjaman_id'; // Primary key tabel peminjaman
    public $timestamps = false; // Jika tabel tidak memiliki kolom created_at dan updated_at

    protected $fillable = [
        'buku_id',
        'anggota_id',
        'tanggal_pinjam',
        'tanggal_kembali',
    ];

    // Jika Anda ingin mendefinisikan relasi dengan model Buku
    public function buku()
    {
        return $this->belongsTo(BukuModel::class, 'buku_id', 'buku_id');
    }

    // Jika Anda ingin mendefinisikan relasi dengan model Anggota
    public function anggota()
    {
        return $this->belongsTo(AnggotaModel::class, 'anggota_id', 'anggota_id');
    }
}