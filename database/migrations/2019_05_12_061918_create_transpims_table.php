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
            $table->integer('id_anggota')->unsigned();
            $table->integer('id_petugas')->unsigned();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->integer('denda')->default(0);
            $table->timestamps();

            $table->foreign('id_anggota')->references('id')->on('anggotas')->onDelete('cascade');
            $table->foreign('id_petugas')->references('id')->on('petugass')->onDelete('cascade');
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
