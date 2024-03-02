<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'BR1',
                'barang_nama' => 'Baju Erigo',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BR2',
                'barang_nama' => 'Jean Levis',
                'harga_beli' => 100000,
                'harga_jual' => 125000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BR3',
                'barang_nama' => 'Cincin Emas',
                'harga_beli' => 1000000,
                'harga_jual' => 1500000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BR4',
                'barang_nama' => 'Lipstik Wardah',
                'harga_beli' => 25000,
                'harga_jual' => 40000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BR5',
                'barang_nama' => 'Panci Teflon',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BR6',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 2000000,
                'harga_jual' => 3000000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BR7',
                'barang_nama' => 'Laptop Apple',
                'harga_beli' => 14000000,
                'harga_jual' => 17000000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BR8',
                'barang_nama' => 'Cincin Akik',
                'harga_beli' => 1500000,
                'harga_jual' => 2000000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BR9',
                'barang_nama' => 'Kosmetik Elizabeth',
                'harga_beli' => 2750000,
                'harga_jual' => 3400000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BR10',
                'barang_nama' => 'Panci Aluminium',
                'harga_beli' => 90000,
                'harga_jual' => 125000,
            ],
        ];
        DB::table('m_barangs')->insert($data);
    }
}
