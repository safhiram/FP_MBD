<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenjagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menjagas', function (Blueprint $table) {
            $table->bigIncrements('id_menjaga');
            $table->integer('id_pegawai');
            $table->integer('id_studio');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->date('tanggal_jaga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menjagas');
    }
}
