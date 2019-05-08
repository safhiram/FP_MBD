<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $fillable = ['no_ktp_pegawai','nama_pegawai','tempat_lahir_pegawai','tgl_lahir_pegawai','alamat_pegawai','umur_pegawai','no_telfon_pegawai','jabatan','gaji','jenis_kelamin','username','password'];
}
