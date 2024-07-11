<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTable extends Migration
{
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->string('email');
            $table->string('telepon');
            $table->string('program_studi');
            $table->string('fakultas');
            $table->decimal('ipk', 3, 2);
            $table->integer('sks');
            $table->string('transkrip');
            $table->string('skripsi');
            $table->string('foto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengajuans');
    }
};
