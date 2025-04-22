<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peminjaman')->insert([
            [
                'buku_id' => 1,
                'anggota_id' => 2,
                'tanggal_pinjam' => '2025-04-20',
                'tanggal_kembali' => '2025-04-27',
            ],
            [
                'buku_id' => 2,
                'anggota_id' => 1,
                'tanggal_pinjam' => '2025-04-22',
                'tanggal_kembali' => '2025-04-29',
            ],
        ]);
    }
}
