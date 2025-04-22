<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanModel;
use App\Models\BukuModel;
use App\Models\AnggotaModel;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = PeminjamanModel::all();
        return view('peminjaman.index', compact('peminjamans'));
    }

    public function show($id)
    {
        $peminjaman = PeminjamanModel::findOrFail($id);
        $buku = BukuModel::All();
        $anggota = AnggotaModel::All();
        return view('peminjaman.show', compact('peminjaman', 'buku', 'anggota'));
    }
}
