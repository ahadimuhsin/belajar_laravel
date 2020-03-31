<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">

	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type:  none;
			margin: 5px;
		}
	</style>
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
	<div class="form-group">

	</div>
	<p>Cari Data Pegawai </p>
	<form action="/pegawai/cari" method="GET" class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai" value="{{ old('cari')}}">
		<input class="btn btn-primary ml-3" type="submit" value="CARI">
	</form>
	<div>
	<a href="/pegawai/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
</div>
	<table class="table table-bordered" border="2">
		<tr>
			<th>Nomor</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@php $i = 1 @endphp
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->id_pegawai }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/pegawai/delete/{{ $p->id_pegawai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

<!-- Untuk Pagination -->
	</br>
	Halaman : {{$pegawai -> currentPage()}} </br>
	Jumlah Data : {{$pegawai -> total()}} </br>
	Data Per Halaman : {{$pegawai -> perPage()}} </br>

	{{$pegawai -> links()}}
		</div>
	</div>
</div>
</body>
</html>
