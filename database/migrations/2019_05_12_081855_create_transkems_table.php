<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranskemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transkems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pinjam')->unsigned();
            $table->integer('id_petugas')->unsigned();
            $table->integer('id_buku')->unsigned();
            $table->date('tanggal_pengembalian');
            $table->integer('denda');
            $table->timestamps();

            $table->foreign('id_pinjam')->references('id')->on('transpims')->onDelete('cascade');
            $table->foreign('id_petugas')->references('id')->on('petugass')->onDelete('cascade');
            $table->foreign('id_buku')->references('id')->on('bukus')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transkems');
    }
}
