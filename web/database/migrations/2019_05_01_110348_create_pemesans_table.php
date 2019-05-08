<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesans', function (Blueprint $table) {
            $table->bigIncrements('id_pemesan');
            $table->string('nama_pemesan');
            $table->string('no_telfon_pemesan');
            $table->string('tempat_lahir_pemesan');
            $table->date('tanggal_lahir_pemesan');
            $table->string('alamat');
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
        Schema::dropIfExists('pemesans');
    }
}
