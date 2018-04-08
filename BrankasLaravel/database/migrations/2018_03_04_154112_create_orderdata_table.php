<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdata', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_pemesan_order')->unsigned();
          $table->string('lokasigudang',100);
          $table->string('kategoribisnis',100);
          $table->date('tanggalmasuk');
          $table->string('paket',100);
          $table->timestamps();

          $table->foreign('id_pemesan_order')
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
        Schema::dropIfExists('orderdata');
    }
}
