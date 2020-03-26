<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function showSession(Request $request)
    {
      if($request->session()->has('nama'))
      {
        echo $request->session()->get('nama');
      } else
      {
        echo 'Tidak ada data dalam session';
      }
    }

    public function createSession (Request $request)
    {
      $request->session()->put('nama', 'Muhsin Ahadi');
      echo "Data telah ditambahkan ke session";
    }

    public function deleteSession (Request $request)
    {
      $request->session()->forget('nama');
      echo "Data telah dihapus";
    }
}
