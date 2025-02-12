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
            [
                'source_name' => 'Deep Well B',
                'source_code' => 'WS002',
                'source_type' => 'well',
                'source_status' => 'active',
                'capacity_flow_lps' => 8.3,
                'village' => 'Village Two',
                'district' => 'District B',
                'city' => 'City Y',
                'province' => 'Province Z',
                'latitude' => -7.2345678,
                'longitude' => 110.8765432,
                'elevation_masl' => 425.50,
                'manager' => 'Company ABC',
                'exploration_year' => 2008,
                'operational_year' => 2009,
                'utilization_system' => 'Pump system',
                'number_of_pumps' => 2,
                'ownership_status' => 'Private',
                'notes' => 'Secondary water source for District B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'source_name' => 'River Source C',
                'source_code' => 'WS003',
                'source_type' => 'river',
                'source_status' => 'maintenance',
                'capacity_flow_lps' => 15.7,
                'village' => 'Village Three',
                'district' => 'District C',
                'city' => 'City Z',
                'province' => 'Province Z',
                'latitude' => -7.3456789,
                'longitude' => 110.7654321,
                'elevation_masl' => 350.25,
                'manager' => 'Company DEF',
                'exploration_year' => 2012,
                'operational_year' => 2013,
                'utilization_system' => 'Mixed system',
                'number_of_pumps' => 3,
                'ownership_status' => 'Joint venture',
                'notes' => 'Major water source for industrial area',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
