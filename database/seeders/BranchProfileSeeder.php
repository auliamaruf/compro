<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BranchProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branch_profiles')->insert([
            [
                'branch_name' => 'Cabang Jakarta',
                'branch_head_name' => 'Budi Santoso',
                'branch_address' => 'Jl. Sudirman No. 45, Jakarta',
                'branch_phone' => '021-567890',
                'branch_email' => 'jakarta@contoh.com',
                'google_maps_link' => 'https://maps.google.com/example1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Cabang Bandung',
                'branch_head_name' => 'Siti Aisyah',
                'branch_address' => 'Jl. Asia Afrika No. 10, Bandung',
                'branch_phone' => '022-1234567',
                'branch_email' => 'bandung@contoh.com',
                'google_maps_link' => 'https://maps.google.com/example2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Cabang Surabaya',
                'branch_head_name' => 'Joko Widodo',
                'branch_address' => 'Jl. Pemuda No. 88, Surabaya',
                'branch_phone' => '031-9876543',
                'branch_email' => 'surabaya@contoh.com',
                'google_maps_link' => 'https://maps.google.com/example3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_name' => 'Cabang Medan',
                'branch_head_name' => 'Ahmad Fauzi',
                'branch_address' => 'Jl. Gatot Subroto No. 99, Medan',
                'branch_phone' => '061-543210',
                'branch_email' => 'medan@contoh.com',
                'google_maps_link' => 'https://maps.google.com/example4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
