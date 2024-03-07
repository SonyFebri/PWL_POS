<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'MEN',
                'kategori_nama' => 'Pakaian Pria'
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'WOM',
                'kategori_nama' => 'Pakaian Wanita'
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'KID',
                'kategori_nama' => 'Pakaian Anak-Anak'
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'SHO',
                'kategori_nama' => 'Sepatu'
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'ACC',
                'kategori_nama' => 'Aksesoris'
            ]
        ];

        DB::table('m_kategori')->insert($data);
    }

}