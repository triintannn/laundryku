<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_outlet');
            $table->integer('id_member');
            $table->datetime('tgl');
            $table->datetime('batas_waktu');
            $table->datetime('tgl_bayar');
            $table->integer('biaya tambahan');
            $table->double('diskon');
            $table->integer('pajak');
            $table->enum('status', ['baru', 'proses', 'selesai', 'diambil'])->default('baru');
            $table->enum('dibayar', ['sudah', 'belum']);
            $table->integer('id_user');
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
        Schema::dropIfExists('tb_transaksi');
    }
}
