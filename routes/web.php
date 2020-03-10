<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//untuk routing ke halaman welcome
Route::get('/', function () {
    return view('welcome');
});

//buat Route baru
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

//Route blog
Route::get('blog', function(){
  return view('blog');
});

//Route ke Dosen_Controller dengan function index
Route::get('dosen', 'Dosen_Controller@index');

//get Pegawai
Route::get('/pegawai/{nama}','Pegawai_Controller@index');
Route::get('/formulir', 'Pegawai_Controller@formulir');
//arti line di atas
//apabila kita mengakses localhost/belajar_laravel/formulir, maka memanggil
//fungsi formulir pada Pegawai_Controller
Route::post('/formulir/proses', 'Pegawai_Controller@proses');

//route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');
