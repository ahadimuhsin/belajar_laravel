<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dosen_Controller extends Controller
{
    public function index(){
//variabel yang akan di-pass ke view biodata
      $nama = "Muhsin Ahadi";
      $pelajaran = ["Konsep Pemrograman", "Sistem Digital", "Aljabar Linear", "Pemrograman Web", "Mobile Programming"];
      return view('biodata', ['nama' => $nama, 'pelajaran' => $pelajaran]); //menampilkan halaman biodata
    }
}
