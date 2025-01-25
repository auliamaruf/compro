<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organization_structures', function (Blueprint $table) {
            $table->id();
            $table->string('position_name'); // Nama posisi
            $table->foreignId('supervisor_id')->nullable()->constrained('organization_structures'); // Referensi posisi atasan
            $table->text('description')->nullable(); // Deskripsi posisi
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('organization_structures');
    }
};