<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDipinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dipinjams', function (Blueprint $table) {
            $table->integer('id_pinjam')->unsigned();
            $table->integer('id_buku')->unsigned();
            $table->timestamps();

            $table->foreign('id_pinjam')->references('id')->on('transpims')->onDelete('cascade');
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
        Schema::dropIfExists('dipinjams');
    }
}
