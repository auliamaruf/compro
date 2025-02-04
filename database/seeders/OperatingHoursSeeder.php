<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperatingHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('operating_hours')->insert([
            ['day' => 'Monday', 'open_time' => '09:00:00', 'close_time' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['day' => 'Tuesday', 'open_time' => '09:00:00', 'close_time' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['day' => 'Wednesday', 'open_time' => '09:00:00', 'close_time' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['day' => 'Thursday', 'open_time' => '09:00:00', 'close_time' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['day' => 'Friday', 'open_time' => '09:00:00', 'close_time' => '16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['day' => 'Saturday', 'open_time' => '09:00:00', 'close_time' => '13:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['day' => 'Sunday', 'open_time' => null, 'close_time' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
