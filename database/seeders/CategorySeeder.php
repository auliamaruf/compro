<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Berita',
                'description' => 'Kategori untuk berita terbaru.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengumuman',
                'description' => 'Kategori untuk pengumuman penting.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tips dan Trik',
                'description' => 'Kategori untuk tips dan trik bermanfaat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
