<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('organization_structures')->insert([
            ['name' => 'Direktur Utama', 'position_name' => 'Direktur Utama', 'supervisor_id' => null, 'level' => 1, 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Direktur Umum', 'position_name' => 'Direktur Umum', 'supervisor_id' => null, 'level' => 1, 'order' => 2, 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Kepala Bagian Teknik', 'position_name' => 'Kepala Bagian Teknik', 'supervisor_id' => 1, 'level' => 2, 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Bagian SPI', 'position_name' => 'Kepala Bagian SPI', 'supervisor_id' => 1, 'level' => 2, 'order' => 2, 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Kepala Bagian Umum', 'position_name' => 'Kepala Bagian Umum', 'supervisor_id' => 2, 'level' => 2, 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Bagian Keuangan', 'position_name' => 'Kepala Bagian Keuangan', 'supervisor_id' => 2, 'level' => 2, 'order' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Bagian Hubungan Langganan', 'position_name' => 'Kepala Bagian Hubungan Langganan', 'supervisor_id' => 2, 'level' => 2, 'order' => 5, 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Kepala Sub Bagian Perencana', 'position_name' => 'Kepala Sub Bagian Perencana', 'supervisor_id' => 3, 'level' => 3, 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Sub Bagian NRW dan GIS', 'position_name' => 'Kepala Sub Bagian NRW dan GIS', 'supervisor_id' => 3, 'level' => 3, 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Sub Bagian Produksi', 'position_name' => 'Kepala Sub Bagian Produksi', 'supervisor_id' => 3, 'level' => 3, 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Sub Bagian Transmisi dan Distribusi', 'position_name' => 'Kepala Sub Bagian Transmisi dan Distribusi', 'supervisor_id' => 3, 'level' => 3, 'order' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Kepala Sub Bagian Kerumahtanggaan', 'position_name' => 'Kepala Sub Bagian Kerumahtanggaan', 'supervisor_id' => 6, 'level' => 3, 'order' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Sub Bagian Kepegawaian', 'position_name' => 'Kepala Sub Bagian Kepegawaian', 'supervisor_id' => 6, 'level' => 3, 'order' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Sub Bagian Informasi Teknologi', 'position_name' => 'Kepala Sub Bagian Informasi Teknologi', 'supervisor_id' => 6, 'level' => 3, 'order' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Sub Bagian Kesekertariatan', 'position_name' => 'Kepala Sub Bagian Kesekertariatan', 'supervisor_id' => 6, 'level' => 3, 'order' => 8, 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Kepala Sub Bagian Anggaran Pendapatan', 'position_name' => 'Kepala Sub Bagian Anggaran Pendapatan', 'supervisor_id' => 7, 'level' => 3, 'order' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Sub Bagian Verifikasi Pembukuan', 'position_name' => 'Kepala Sub Bagian Verifikasi Pembukuan', 'supervisor_id' => 7, 'level' => 3, 'order' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kepala Sub Bagian Gudang', 'position_name' => 'Kepala Sub Bagian Gudang', 'supervisor_id' => 7, 'level' => 3, 'order' => 11, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
