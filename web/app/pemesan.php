<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemesan extends Model
{
    //
    protected $fillable = ['nama_pemesan','no_telfon_pemesan','tempat_lahir_pemesan','tanggal_lahir_pemesan','alamat','jenis_kelamin','username','password'];
}
