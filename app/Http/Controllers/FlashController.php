<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class FlashController extends Controller
{
    //function index akan menampilkan halaman notifikasi
    public function index()
    {
      return view('notifikasi');
    }

    //function sukses akan menampilkan pesan sukses, kemudian kembali
    //ke halaman pesan
    public function sukses()
    {
      Session::flash('sukses', 'Ini notifikasi Sukses');
      return redirect('pesan');
    }

    //function peringatan akan menampilkan pesan peringatan
    public function peringatan()
    {
      Session::flash('peringatan', 'Ini notifikasi Peringatan');
      return redirect('pesan');
    }

    //function gagal menampilkan pesan gagal
    public function gagal()
    {
      Session::flash('gagal', 'Ini notifikasi gagal');
      return redirect('pesan');
    }
}
