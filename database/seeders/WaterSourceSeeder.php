<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaterSourceSeeder extends Seeder
{
    public function run()
    {
        DB::table('water_sources')->insert([
            [
                'source_name' => 'Spring A',
                'source_code' => 'WS001',
                'source_type' => 'spring',
                'source_status' => 'active',
                'capacity_flow_lps' => 10.5,
                'village' => 'Village One',
                'district' => 'District A',
                'city' => 'City X',
                'province' => 'Province Z',
                'latitude' => -7.1234567,
                'longitude' => 110.9876543,
                'elevation_masl' => 500.75,
                'manager' => 'Company XYZ',
                'exploration_year' => 2005,
                'operational_year' => 2010,
                'utilization_system' => 'Gravity-fed system',
                'number_of_pumps' => 0,
                'ownership_status' => 'Government',
                'notes' => 'Main water source for District A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
