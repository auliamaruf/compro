<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama kategori
            $table->text('description')->nullable(); // Deskripsi kategori
            $table->timestamps(); // Tanggal dibuat dan diperbarui
            $table->softDeletes(); // Menambahkan fitur soft delete
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}