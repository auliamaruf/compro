<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('branch_profiles', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap profile cabang
            $table->string('branch_name'); // Nama Cabang
            $table->string('branch_head_name'); // Nama Kepala Cabang
            $table->text('branch_address'); // Alamat
            $table->string('branch_phone')->nullable(); // Telepon
            $table->string('branch_email')->nullable(); // Email
            $table->timestamps(); // Tanggal pembuatan dan pembaruan
        });
    }

    public function down()
    {
        Schema::dropIfExists('branch_profiles');
    }
}