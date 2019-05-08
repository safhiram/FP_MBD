<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Cek tabel</title>
</head>
<body>

	<h1>Data Pegawai</h1>

	<ul>
	@foreach($pegawai as $p)
		<li>{{ "Nama : ". $p->nama_pegawai . ' | Alamat : ' . $p->alamat_pegawai }}</li>
	@endforeach
	</ul>

</body>
</html>