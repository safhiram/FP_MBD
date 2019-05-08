<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemutarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memutars', function (Blueprint $table) {
            $table->bigIncrements('id_memutar');
            $table->integer('id_film');
            $table->integer('id_studio');
            $table->time('waktu_pemutaran');
            $table->time('waktu_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memutars');
    }
}
