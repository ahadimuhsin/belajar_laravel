<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil model pegawai
use App\Siswa;

class SiswaController extends Controller
{
    //
    public function index()
    {
      //mengambil semua data pada tabel Siswa
      //sama dengan select * from siswa
      $siswa = Siswa::All();

      // //mengambil data siswa pertama
      // $siswa = Siswa::first();
      //
      // //mengambil data berdasarkan ID = 1
      // $siswa = Siswa::find(1);
      //
      // //mengambil data yang namanya Ana Handayani
      // $siswa = Siswa::where('nama', '=', 'Ana Handayani')->get();
      //
      // //mengambil data pegawai yang IDnya lebih besar dari 20
      // $siswa = Siswa::where('id', '>', 20)->get();
      //
      // //mengambil data yang namanya mengandung kata joko
      // $siswa = Siswa::where('nama', 'like', '%joko%')->get();
      //
      // //menampilkan 10 data siswa per halaman
      // $siswa = Siswa::paginate(10);

      //mengirim data siswa ke view siswa
      return view('siswa', ['siswa'=>$siswa]);
    }

    public function tambah()
    {
      return view('siswa_tambah');
    }

    public function store(Request $request)
    {
      //Form validasi
      $this->validate($request, [
        'nama' => 'required',
        'alamat' => 'required'
      ]);

      //menyimpan data ke tabel Siswa
      Siswa::create([
        'nama' => $request -> nama,
        'alamat' => $request -> alamat
      ]);

      //Kalau proses penambahan sudah selesai, kembali ke halaman siswa
      return redirect('/siswa');

    }

    //fungsi hapus yang diambil berdasarkan id
    public function hapus($id)
    {
      $siswa = Siswa::find($id);
      $siswa->delete();

      return redirect('/siswa');
    }

    //fungsi menampilkan data siswa yang sudah dihapus
    public function trash()
    {
      $siswa = Siswa::onlyTrashed()->get();
      return view('siswa_trash', ['siswa'=>$siswa]);
    }

    public function restore($id)
    {
      $siswa = Siswa::onlyTrashed()->where('id', $id);
      $siswa->restore();

      return redirect('siswa/trash');
    }

    //mengembalikan semua data
    public function restore_all()
    {
      $siswa = Siswa::onlyTrashed();
      $siswa->restore();

      return redirect('siswa/trash');
    }

    public function hapus_permanen($id)
    {
      $siswa = Siswa::onlyTrashed()->where('id', $id);
      $siswa->forceDelete();

      return redirect('siswa/trash');
    }

    public function hapus_permanen_semua()
    {
      $siswa = Siswa::onlyTrashed();
      $siswa->forceDelete();
      
      return redirect('siswa/trash');
    }
}
