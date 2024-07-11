<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToPengajuansTable extends Migration
{
    public function up()
    {
        Schema::table('pengajuans', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');

            // Jika Anda menggunakan foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('pengajuans', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}