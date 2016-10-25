<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 60);
            $table->string('jalan', 60);
            $table->string('kordinat_x', 25);
            $table->string('kordinat_y', 25);
            $table->integer('id_kecamatan');
            $table->integer('id_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_info');
    }
}
