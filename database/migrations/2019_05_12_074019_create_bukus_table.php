<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('id_pengarang')->unsigned();
            $table->integer('id_rak')->unsigned();
            $table->integer('id_penerbit')->unsigned();
            $table->string('Judul');
            $table->integer('stok')->unsigned();
            $table->date('tanggal_terbit');
            $table->timestamps();

            $table->foreign('id_pengarang')->references('id')->on('pengarangs')->onDelete('cascade');
            $table->foreign('id_rak')->references('id')->on('raks')->onDelete('cascade');
            $table->foreign('id_penerbit')->references('id')->on('penerbits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
    }
}
