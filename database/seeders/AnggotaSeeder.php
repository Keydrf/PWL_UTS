<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anggota')->insert([
            [
                'nama' => 'Siti Nurhaliza',
                'alamat' => 'Jl. Merpati No. 12',
                'no_hp' => '081234567890',
            ],
            [
                'nama' => 'Budi Hartono',
                'alamat' => 'Jl. Kenanga No. 5',
                'no_hp' => '082134567891',
            ],
        ]);
    }
}
