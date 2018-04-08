<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lokasi_gudang')->unsigned();
            $table->integer('id_pemilik_barang')->unsigned();
            $table->string('nama',100);
            $table->string('deskripsi',100);
            $table->integer('quantity');
            $table->string('gudang',100);
            $table->timestamps();

            $table->foreign('id_pemilik_barang')
                  ->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
