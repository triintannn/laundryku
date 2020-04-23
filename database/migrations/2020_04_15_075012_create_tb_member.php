<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->enum('jenis_kelamin', ['drafted', 'published'])->default('drafted');
            $table->text('alamat');
            $table->string('tlp', 15);
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
        Schema::dropIfExists('tb_member');
    }
}
