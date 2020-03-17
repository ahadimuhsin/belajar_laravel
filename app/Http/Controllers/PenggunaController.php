<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengguna;

class PenggunaController extends Controller
{
    //
    public function index()
    {
      //mengambil semua data Pengguna
      $pengguna = pengguna::all();

      return view('pengguna', ['pengguna' => $pengguna]);
    }
}
