<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->integer('id_pegawai');
            $table->integer('id_memutar');
            $table->integer('id_pemesan');
            $table->integer('jumlah_tiket');
            $table->integer('harga_per_tiket');
            $table->date('tanggal_pembelian');
            $table->integer('total_pembelian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
