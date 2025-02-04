<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatingHoursTable extends Migration
{
    public function up()
    {
        Schema::create('operating_hours', function (Blueprint $table) {
            $table->id();
            $table->string('day'); // Kolom Hari
            $table->time('open_time')->nullable(); // Kolom Jam Buka
            $table->time('close_time')->nullable(); // Kolom Jam Tutup
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('operating_hours');
    }
}
