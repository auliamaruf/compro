<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            OrganizationStructureSeeder::class,
            OperatingHoursSeeder::class,
            GeneralSeeder::class,
            CompanyHistorySeeder::class,
            CategorySeeder::class,
            BranchProfileSeeder::class,
            PostSeeder::class,
            WaterSourceSeeder::class,  // Fixed class reference
        ]);
    }
}
