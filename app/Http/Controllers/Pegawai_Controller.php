<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//nama class harus sama dengan nama file dan harus berkekstensi Contrroller
class Pegawai_Controller extends Controller
{

  public function index($nama){
    return $nama;
  }

  public function formulir(){
    //menampilkan halaman formulir
    return view('formulir');
  }

  //method untuk memproses formulir
  public function proses(Request $request){
    $nama = $request->input('nama');
    $alamat = $request->input('alamat');

    return "Nama: ".$nama."\n Alamat: ".$alamat;
  }

} ?>
