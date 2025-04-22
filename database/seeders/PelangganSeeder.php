<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Ahmad Fadli',
                'email' => 'ahmad@example.com',
                'no_hp' => '081234567890',
                'alamat' => 'Jl. Melati No.10, Malang'
            ],
            [
                'nama' => 'Siti Aminah',
                'email' => 'siti@example.com',
                'no_hp' => '082345678901',
                'alamat' => 'Jl. Kenanga No.20, Surabaya'
            ],
        ];

        DB::table('pelanggan')->insert($data);
    }
}
