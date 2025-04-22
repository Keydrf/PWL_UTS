<?php

namespace App\Http\Controllers;

use App\Models\PelangganModel;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = PelangganModel::all();
        return view('coba.index', compact('pelanggans'));
    }
    public function show($id)
{
    $pelanggan = PelangganModel::findOrFail($id);
    return view('coba.show', compact('pelanggan'));
}
}
