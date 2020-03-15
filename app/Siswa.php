<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //define the table name
    protected $table = "siswa";

    //kalau menggunakan fungsi create, gunakan variabel ini
    //disebut Mass Assignment
    protected $fillable = ['nama', 'alamat'];
}
