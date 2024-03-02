<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'user_id' => 3,
                'pembeli' => 'Rafli',
                'penjualan_kode' => 'PJ1',
                'penjualan_tanggal' => '2024-02-28',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Johan',
                'penjualan_kode' => 'PJ2',
                'penjualan_tanggal' => '2024-02-28',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Selen',
                'penjualan_kode' => 'PJ3',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Marya',
                'penjualan_kode' => 'PJ4',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Simon',
                'penjualan_kode' => 'PJ5',
                'penjualan_tanggal' => '2024-02-29',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Adi',
                'penjualan_kode' => 'PJ6',
                'penjualan_tanggal' => '2024-03-01',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Indah',
                'penjualan_kode' => 'PJ7',
                'penjualan_tanggal' => '2024-03-01',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Ari',
                'penjualan_kode' => 'PJ8',
                'penjualan_tanggal' => '2024-03-01',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Zaki',
                'penjualan_kode' => 'PJ9',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Iza',
                'penjualan_kode' => 'PJ10',
                'penjualan_tanggal' => '2024-03-02',
            ],
        ];
        DB::table('t_penjualans')->insert($data);
    }
}
