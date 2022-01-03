<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class SiswaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswa::select('id', 'nama', 'alamat')->get();
    }

    public function headings() :array
    {
        return ["ID", "Nama", "Alamat"];
    }
}
