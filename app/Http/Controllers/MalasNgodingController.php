<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasNgodingController extends Controller
{
  public function input()
  {
    return view('input');
  }

  public function proses (Request $request)
  {

    $messages=[
      'required' => ':attribute harus diisi',
      'min' => ':attribute harus diisi minimal :min karakter',
      'max' => ':attribute harus diisi maksimal :max karakter',
      'numeric' => ':attribute harus berbentuk numerik',
    ];
    $this->validate($request, [
      'nama' => 'required|min:5|max:20',
      'pekerjaan' => 'required',
      'usia' => 'required|numeric'], $messages);

    return view('proses', ['data' => $request]);
  }
}
?>
