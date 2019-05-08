<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->bigIncrements('id_pegawai');
            $table->string('no_ktp_pegawai');
            $table->string('nama_pegawai');
            $table->string('tempat_lahir_pegawai');
            $table->date('tgl_lahir_pegawai');
            $table->string('alamat_pegawai');
            $table->integer('umur_pegawai');
            $table->string('no_telfon_pegawai');
            $table->string('jabatan');
            $table->integer('gaji');
            $table->char('jenis_kelamin');
            $table->string('username');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
}
