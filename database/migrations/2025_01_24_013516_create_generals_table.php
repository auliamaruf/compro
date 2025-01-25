<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable(); // Path logo perusahaan
            $table->string('nama_perusahaan');
            $table->text('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('sosial_media_1')->nullable(); // URL Sosial Media 1
            $table->string('sosial_media_2')->nullable(); // URL Sosial Media 2
            $table->string('sosial_media_3')->nullable(); // URL Sosial Media 3
            $table->text('deskripsi')->nullable(); // Deskripsi singkat
            $table->text('visi')->nullable(); // Visi perusahaan
            $table->text('misi')->nullable(); // Misi perusahaan
            $table->string('jam_operasional')->nullable(); // Jam operasional
            $table->string('sosial_media_4')->nullable(); // URL Sosial Media tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
}