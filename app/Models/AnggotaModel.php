<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota'; // Nama tabel sesuai database
    protected $primaryKey = 'anggota_id'; // Primary key tabel anggota
    public $timestamps = false; // Jika tabel tidak memiliki created_at dan updated_at

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
    ];
    use HasFactory;
}
