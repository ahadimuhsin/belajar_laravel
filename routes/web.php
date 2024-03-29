<?php

use App\Pegawai;
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
    $data = Pegawai::limit(10)->get();
    // dd($data);
    return view('welcome', compact('data'));
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

/*
Bagian Pegawai
*/
//route CRUD
//halaman awal
Route::get('/pegawai','Pegawai_Controller@index');
//route tambah pegawai
Route::get('/pegawai/tambah', 'Pegawai_Controller@tambah');
//menyimpan/mengirim data hasil tambah pegawai
Route::post('/pegawai/store', 'Pegawai_Controller@store');
//route untuk mengambil id pegawai yang mau diedit
Route::get('/pegawai/edit/{id}', 'Pegawai_Controller@edit');
//route untuk menjalankan query update
Route::post('/pegawai/update', 'Pegawai_Controller@update');
//route untuk hapus pegawai berdasarkan id
Route::get('/pegawai/delete/{id}', 'Pegawai_Controller@delete');
//route untuk pencarian pegawai
Route::get('/pegawai/cari', 'Pegawai_Controller@cari');
//rute untuk cetak pdf
Route::get('/pegawai/cetak_pdf', 'Pegawai_Controller@cetak_pdf');

Route::get('/formulir', 'Pegawai_Controller@formulir');
//arti line di atas
//apabila kita mengakses localhost/belajar_laravel/formulir, maka memanggil
//fungsi formulir pada Pegawai_Controller
Route::post('/formulir/proses', 'Pegawai_Controller@proses');

//route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//belajar form validasi
Route::get('/input', 'MalasNgodingController@input');

Route::post('/proses', 'MalasNgodingController@proses');

//route siswa
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/tambah', 'SiswaController@tambah');
Route::get('/siswa/export_excel', 'SiswaController@export_excel');
Route::post('/siswa/import_excel', 'SiswaController@import_excel');

Route::post('siswa/store', 'SiswaController@store');
//soft deletes
//Route untuk menghapus data siswa
Route::get('siswa/hapus/{id}', 'SiswaController@hapus');
//Route untuk cek tong Sampah
Route::get('siswa/trash', 'SiswaController@trash');
//Route restore
Route::get('siswa/kembalikan/{id}', 'SiswaController@restore');
//Route restore Semua
Route::get('siswa/kembalikan_semua', 'SiswaController@restore_all');
//Route hapus permanen data yang dipilih
Route::get('/siswa/hapus_permanen/{id}', 'SiswaController@hapus_permanen');
//Route menghapus semua data
Route::get('/siswa/hapus_permanen_semua', 'SiswaController@hapus_permanen_semua');
//fitur edit dan update
Route::get('siswa/edit/{id}', 'SiswaController@edit');
Route::put('siswa/update/{id}', 'SiswaController@update');
//download pdf
Route::get('siswa/cetak_pdf', 'SiswaController@cetak_pdf');
//Tutorial Laravel 23 - One To One
Route::get('/pengguna', 'PenggunaController@index');

//Tutorial Laravel 24 - One To Many
Route::get('/article', 'Article_Controller@index');

//Tutorial 25 - Many To Many
Route::get('/anggota', 'Anggota_Hadiah_Controller@index');

//Route untuk encrypt
Route::get('/enkripsi', 'EnkripDekrip@enkripsi');

Route::get('/data', 'EnkripDekrip@data');
Route::get('/data/{data_rahasia}', 'EnkripDekrip@data_proses');

//Route untuk upload
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
//untuk delete file
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

//Route untuk session
Route::get('/session/tampil', 'SessionController@showSession');
Route::get('/session/buat', 'SessionController@createSession');
Route::get('/session/hapus', 'SessionController@deleteSession');

//ROute untuk flash message
Route::get('/pesan', 'FlashController@index');
Route::get('/pesan/sukses', 'FlashController@sukses');
Route::get('/pesan/peringatan', 'FlashController@peringatan');
Route::get('/pesan/gagal', 'FlashController@gagal');

//Rute kirim email
Route::get('/kirimemail', 'MailController@index');
