<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    //
    protected $fillable =['nama_film', 'tahun_pembuatan', 'genre', 'pemain', 'deskripsi_film', 'tanggal_mulai_tayang', 'tanggal_selesai_tayang','durasi'];
}
