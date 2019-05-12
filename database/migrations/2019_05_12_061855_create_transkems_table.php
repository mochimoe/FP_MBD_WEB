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
            $table->integer('id_pinjam');
            $table->integer('id_petugas');
            $table->integer('id_buku');
            $table->date('tanggal_pengembalian');
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
        Schema::dropIfExists('transkems');
    }
}
