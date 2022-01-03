<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Laporan PDF dengan DOMPDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
</head>
<body>
    <center>
        <h5>Laporan PDF</h5>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->pegawai_nama }}</td>
                    <td>{{ $item->pegawai_jabatan }}</td>
                    <td>{{ $item->pegawai_umur }}</td>
                    <td>{{ $item->pegawai_alamat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </center>

</body>

</html>
