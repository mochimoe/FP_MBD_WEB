<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranspimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transpims', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_anggota');
            $table->integer('id_petugas');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->integer('denda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transpims');
    }
}
