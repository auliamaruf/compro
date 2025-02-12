<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('water_sources', function (Blueprint $table) {
            $table->id();
            $table->string('source_name');
            $table->string('source_code')->unique();
            $table->enum('source_type', ['spring', 'bore_well', 'river', 'lake', 'others']);
            $table->enum('source_status', ['active', 'inactive', 'under_maintenance']);
            $table->decimal('capacity_flow_lps', 8, 2);

            // Location & Geospatial
            $table->string('village');
            $table->string('district');
            $table->string('city');
            $table->string('province');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->decimal('elevation_masl', 8, 2);

            // Infrastructure & Management
            $table->string('manager');
            $table->year('exploration_year')->nullable();
            $table->year('operational_year')->nullable();
            $table->text('utilization_system')->nullable();
            $table->integer('number_of_pumps')->default(0);
            $table->string('ownership_status');

            // Additional Data
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('water_sources');
    }
};
