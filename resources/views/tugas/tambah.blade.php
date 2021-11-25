<!DOCTYPE html>
<html>
<head>
	<title>TUGAS NRP GENAP</title>
</head>
<body>

	<h2><a href="">Bashara Aina</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="Tanggal" required="required"> <br/>
        NamaTugas <input type="text" maxlength="50" name="NamaTugas" required="required"> <br/>
		Status <input type="text" maxlength="1" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
