<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    public function up(): void
    {
        Schema::create('company_histories', function (Blueprint $table) {
            $table->id();
            $table->year('year'); // Tahun
            $table->string('title'); // Judul
            $table->text('description'); // Deskripsi
            $table->timestamps(); // Tanggal dibuat/diperbarui
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_histories');
    }
};