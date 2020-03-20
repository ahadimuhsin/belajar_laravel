<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//modul untuk enkripsi
use Illuminate\Support\Facades\Crypt;

class EnkripDekrip extends Controller
{
    //
    public function enkripsi()
    {
      $encrypted = Crypt::encryptString('Belajar Enkripsi Dekripsi');
      $decrypted = Crypt::decryptString($encrypted);

      echo "Hasil Enkrips: " . $encrypted;
      echo "<br/>";
      echo "<br/>";
      echo "Hasil Dekripsi: " . $decrypted;
    }

    public function data()
    {
      $parameter = [
        'nama'=> 'Muhsin Ahadi',
        'pekerjaan' => 'Staff IT',
      ];
      $enkripsi = Crypt::encrypt($parameter);
      echo "<a href='/data/" .$enkripsi. "'>Klik</a>";
    }

    public function data_proses ($data)
    {
      $data = Crypt::decrypt($data);

      echo "Nama: " .$data['nama'];
      echo "<br/>";
      echo "Pekerjaan: " .$data['pekerjaan'];
    }
}
