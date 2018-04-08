<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatagudangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datagudangs', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_pemilik_gudang')->unsigned();
          $table->integer('id_penyewa_gudang')->unsigned();
          $table->string('lokasigudang',100);
          $table->timestamps();

          $table->foreign('id_penyewa_gudang')
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
        Schema::dropIfExists('datagudangs');
    }
}
