<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tarif_air', function (Blueprint $table) {
            $table->id();
            $table->string('golongan'); // Sosial, Non Niaga, Niaga, Industri
            $table->string('sub_golongan'); // Sosial Umum, Rumah Tangga A, dll.
            $table->integer('tarif_0_10');  // Tarif untuk konsumsi 0-10 m3
            $table->integer('tarif_11_20'); // Tarif untuk konsumsi 11-20 m3
            $table->integer('tarif_21_30'); // Tarif untuk konsumsi 21-30 m3
            $table->integer('tarif_lebih_30'); // Tarif untuk konsumsi >30 m3
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tarif_air');
    }
};
