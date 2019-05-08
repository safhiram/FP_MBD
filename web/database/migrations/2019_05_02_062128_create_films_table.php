<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('id_film');
            $table->string('nama_film');
            $table->string('tahun_pembuatan');
            $table->string('genre');
            $table->string('pemain');
            $table->text('deskripsi_film');
            $table->date('tanggal_mulai_tayang');
            $table->date('tanggal_selesai_tayang');
            $table->string('durasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
