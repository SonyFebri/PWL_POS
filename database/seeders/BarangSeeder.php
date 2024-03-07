<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'MEN001',
                'barang_nama' => 'Kemeja Pria',
                'harga_beli' => 50.00,
                'harga_jual' => 100.00
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'WOM001',
                'barang_nama' => 'Blouse Wanita',
                'harga_beli' => 40.00,
                'harga_jual' => 80.00
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'KID001',
                'barang_nama' => 'Setelan Anak Laki-laki',
                'harga_beli' => 30.00,
                'harga_jual' => 60.00
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'barang_kode' => 'SHO001',
                'barang_nama' => 'Sepatu Sneakers',
                'harga_beli' => 70.00,
                'harga_jual' => 120.00
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'barang_kode' => 'ACC001',
                'barang_nama' => 'Kalung Fashion',
                'harga_beli' => 15.00,
                'harga_jual' => 30.00
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'MEN002',
                'barang_nama' => 'Celana Jeans Pria',
                'harga_beli' => 60.00,
                'harga_jual' => 110.00
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'WOM002',
                'barang_nama' => 'Gaun Elegan',
                'harga_beli' => 80.00,
                'harga_jual' => 150.00
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'KID002',
                'barang_nama' => 'Sepatu Anak Laki-laki',
                'harga_beli' => 25.00,
                'harga_jual' => 50.00
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'SHO002',
                'barang_nama' => 'Sandal Sport',
                'harga_beli' => 45.00,
                'harga_jual' => 90.00
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'ACC002',
                'barang_nama' => 'Topi Trendy',
                'harga_beli' => 20.00,
                'harga_jual' => 40.00
            ],
        ];

        DB::table('m_barang')->insert($data);
    }

}