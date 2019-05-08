<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pegawai;

class pegawaiController extends Controller
{
    public function index()
    {
        //mengambil data pegawai dari tabel pegawais
        $pegawai = pegawai::all();

        //mengirim data pegawai ke view pegawai
        return view('pegawai', ['pegawai' => $pegawai]);
    }
    //
}
