<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'category_name' => 'All',
                'parent_category' => null,
            ],
            [
                'id' => 2,
                'category_name' => 'Desain',
                'parent_category' => 1,
            ],
            [
                'id' => 3,
                'category_name' => 'Desain Grafis & Ilustrasi',
                'parent_category' => 2,
            ],
            [
                'id' => 4,
                'category_name' => 'Alat Desain',
                'parent_category' => 2,
            ],
            [
                'id' => 5,
                'category_name' => 'Desain 3D & Animasi',
                'parent_category' => 2,
            ],
            [
                'id' => 6,
                'category_name' => 'Desain Web',
                'parent_category' => 2,
            ],
            [
                'id' => 7,
                'category_name' => 'Pemasaran',
                'parent_category' => 1,
            ],
            [
                'id' => 8,
                'category_name' => 'Pemasaran Digital',
                'parent_category' => 7,
            ],
            [
                'id' => 9,
                'category_name' => 'Optimasi Mesin Pencari',
                'parent_category' => 7,
            ],
            [
                'id' => 10,
                'category_name' => 'Pemasaran Media Sosial',
                'parent_category' => 7,
            ],
            [
                'id' => 11,
                'category_name' => 'Dasar-dasar Pemasaran',
                'parent_category' => 7,
            ],
            [
                'id' => 12,
                'category_name' => 'Analitik dan Otomatisasi Pemasaran',
                'parent_category' => 7,
            ],
            [
                'id' => 13,
                'category_name' => 'Bisnis',
                'parent_category' => 1,
            ],
            [
                'id' => 14,
                'category_name' => 'Kewirausahaan',
                'parent_category' => 13,
            ],
            [
                'id' => 15,
                'category_name' => 'Komunikasi',
                'parent_category' => 13,
            ],
            [
                'id' => 16,
                'category_name' => 'Manajemen',
                'parent_category' => 13,
            ],
            [
                'id' => 17,
                'category_name' => 'Penjualan',
                'parent_category' => 13,
            ],
            [
                'id' => 18,
                'category_name' => 'Strategi Bisnis',
                'parent_category' => 13,
            ],
        ];

        DB::table('categories')->insert($data);
        DB::statement('ALTER SEQUENCE categories_id_seq RESTART WITH 19');
//         UPDATE categories_id_seq
// SET "last_value"=0
    }
}
