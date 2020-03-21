<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    //model Gambar
    protected $table = "gambar";

    //agar bisa memasukkan file secara banyak
    protected $fillable = ['file', 'keterangan'];
}
