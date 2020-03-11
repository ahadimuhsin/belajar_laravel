<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//nama class harus sama dengan nama file dan harus berkekstensi Contrroller
class Pegawai_Controller extends Controller
{

  // public function index($nama){
  //   return $nama;
  // }
  public function index()
  {
    //mengambil data dari tabel Pegawai
    $pegawai = DB::table('pegawai')->get();

    //mengirim data pegawai ke view index
    return view('index', ['pegawai' => $pegawai]);
  }

  public function tambah()
  {
    return view('tambah');
  }

  public function store(Request $request)
  {
    //memasukkan data berdasarkan atribut name pada form ke dalam tabel pegawai
    DB::table('pegawai')->insert([
      'pegawai_nama' => $request->nama,
      'pegawai_jabatan' => $request->jabatan,
      'pegawai_umur' => $request->umur,
      'pegawai_alamat' => $request->alamat
    ]);
    //setelah berhasil dimasukkan, tampilkan menu pegawai
    return redirect('/pegawai');
  }

//mengambil id yang ingin diedit
  public function edit($id){
    //mengambil data pegawai berdasarkan id yang dipilih
    $pegawai = DB::table('pegawai')->where('id_pegawai', $id)->get();

    //pindahkan data yang didapat ke edit.blade.php
    return view('edit', ['pegawai' => $pegawai]);
  }


  //melakukan proses update data pegawai
  public function update(Request $request)
  {

    DB::table('pegawai')->where('id_pegawai', $request->id)->update([
      'pegawai_nama' => $request->nama,
      'pegawai_jabatan' => $request->jabatan,
      'pegawai_umur' => $request->umur,
      'pegawai_alamat' => $request->alamat
    ]);
    //kembali ke halaman pegawai
    return redirect('/pegawai');
  }

  //fungsi untuk menghapus data
  public function delete($id)
  {
    //menghapus data berdasarkan id
    DB::table('pegawai')->where('id_pegawai', $id)->delete();

    //setelah berhasil hapus, alihkan ke halaman pegawai
    return redirect ('/pegawai');
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
