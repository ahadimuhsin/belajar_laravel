<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//memanggil fitur SoftDeletes
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    //define the table name
    protected $table = "siswa";

    //kalau menggunakan fungsi create, gunakan variabel ini
    //disebut Mass Assignment
    protected $fillable = ['nama', 'alamat'];

    use SoftDeletes;
    //membuat variabel dates untuk mencatat waktu dihapusnya
    //data ke dalam kolom deleted_at
    protected $dates = ['deleted_at'];
}
