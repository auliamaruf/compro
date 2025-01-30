<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tarif_abonemen', function (Blueprint $table) {
            $table->id();
            $table->string('golongan'); // Sosial, Non Niaga, Niaga, Industri
            $table->string('sub_golongan'); // Sosial Umum, Rumah Tangga A, dll.
            $table->integer('tarif'); // Tarif abonemen dalam Rupiah
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tarif_abonemen');
    }
};
