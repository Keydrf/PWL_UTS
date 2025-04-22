<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            [
                'judul' => 'Belajar Laravel Dasar',
                'penulis' => 'Andi Nugroho',
                'tahun_terbit' => 2020,
                'stok' => 3,
            ],
            [
                'judul' => 'Pemrograman Web Lanjutan',
                'penulis' => 'Rina Ayu',
                'tahun_terbit' => 2021,
                'stok' => 5,
            ],
        ]);
    }
}
