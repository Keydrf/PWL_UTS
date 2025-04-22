<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ReservasiModel;

class PelangganModel extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $primaryKey = 'pelanggan_id';
    protected $fillable = [
        'nama', 'email', 'no_hp', 'alamat'
    ];

    
}
