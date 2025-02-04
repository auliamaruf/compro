<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generals')->insert([
            'logo' => 'https://example.com/images/company_logo.png',
            'favicon' => 'https://example.com/images/favicon.ico',
            'nama_perusahaan' => 'PT Contoh Sukses',
            'alamat' => 'Jl. Merdeka No. 123, Jakarta',
            'telepon' => '021-12345678',
            'whatsapp' => '081234567890',
            'email' => 'info@contohsukses.com',
            'sosial_media_1' => 'https://facebook.com/contohsukses',
            'sosial_media_2' => 'https://twitter.com/contohsukses',
            'sosial_media_3' => 'https://instagram.com/contohsukses',
            'sosial_media_4' => 'https://linkedin.com/company/contohsukses',
            'deskripsi' => 'Perusahaan penyedia solusi bisnis terbaik.',
            'visi' => 'Menjadi perusahaan terkemuka di bidang solusi bisnis.',
            'misi' => 'Memberikan layanan terbaik bagi pelanggan dengan inovasi dan teknologi.',
            'jam_operasional' => 'Senin - Jumat, 08:00 - 17:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
