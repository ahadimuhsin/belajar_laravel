<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import model Gambar
use App\Gambar;
class UploadController extends Controller
{
    //ke halaman upload
    public function upload()
    {
      $gambar = Gambar::get();
      return view('upload', ['gambar' => $gambar]);
    }

    public function proses_upload(Request $request)
    {
      //form validasi file
      $this->validate($request, [
        //memvalidasi tipe file, ekstensi, ukuran yang boleh dimasukkan
        'file' => 'required|file|image|mimes:jpeg, png, jpg|max:2048',
        'keterangan' => 'required',
      ]);

      //menyimpan data file yang diupload ke variabel file
      $file = $request->file('file');

      //nama file
      //set nama file dengan format waktu_namaFile
      $nama_file = time()."_".$file->getClientOriginalName();

      //set nama folder tujuan
      $tujuan_upload = 'data_file';
      $file->move($tujuan_upload, $nama_file);

      Gambar::create([
        'file'=>$nama_file,
        'keterangan'=>$request->keterangan,
      ]);

      return redirect()->back();

    }
}
