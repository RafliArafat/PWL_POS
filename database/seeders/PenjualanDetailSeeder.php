<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 75000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => 125000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 1500000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 40000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 5,
                'harga' => 200000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 300000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 17000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 2000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 3400000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 10,
                'harga' => 125000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 1,
                'harga' => 75000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 2,
                'harga' => 125000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 3,
                'harga' => 1500000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 4,
                'harga' => 40000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 200000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 300000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 7,
                'harga' => 17000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 8,
                'harga' => 2000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 9,
                'harga' => 3400000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 10,
                'harga' => 125000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 1,
                'harga' => 75000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 2,
                'harga' => 125000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 3,
                'harga' => 1500000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 4,
                'harga' => 40000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 5,
                'harga' => 200000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 6,
                'harga' => 300000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 7,
                'harga' => 17000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 8,
                'harga' => 2000000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 9,
                'harga' => 3400000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 125000,
                'jumlah' => 1,
            ],
        ];
        DB::table('t_penjualan_details')->insert($data);
    }
}
