<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPaket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_paket', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_outlet');
            $table->enum('jenis', ['kiloan', 'selimut', 'bed_cover', 'kaos', 'lain']);
            $table->string('nama_paket', 100);
            $table->integer('harga');
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
        Schema::dropIfExists('tb_paket');
    }
}
