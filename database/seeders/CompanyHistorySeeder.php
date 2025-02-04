<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_histories')->insert([
            [
                'year' => 2000,
                'title' => 'Perusahaan Didirikan',
                'description' => 'Perusahaan resmi berdiri dengan visi untuk melayani pelanggan dengan lebih baik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 2005,
                'title' => 'Ekspansi Pertama',
                'description' => 'Perusahaan membuka cabang pertama di kota besar untuk menjangkau lebih banyak pelanggan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 2015,
                'title' => 'Digitalisasi',
                'description' => 'Perusahaan mulai beralih ke sistem digital untuk meningkatkan efisiensi operasional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 2023,
                'title' => 'Inovasi dan Penghargaan',
                'description' => 'Perusahaan menerima penghargaan bergengsi atas inovasi dalam industri.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
