<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

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
                'kategori_kode' => 'KT1',
                'kategori_nama' => 'Pakaian',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'KT2',
                'kategori_nama' => 'Perhiasan',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'KT3',
                'kategori_nama' => 'Kecantikan',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'KT4',
                'kategori_nama' => 'Alat Rumah Tangga',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'KT5',
                'kategori_nama' => 'Elektronik',
            ],
        ];
        DB::table('m_kategoris')->insert($data);
    }
}
