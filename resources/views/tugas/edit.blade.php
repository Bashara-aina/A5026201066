<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pegawai NRP GENAP</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">Bashara Aina</a></h2>
	<h3>Edit tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="IDPegawai" required="required"> value="{{ $p->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" name="Tanggal" required="required"> value="{{ $p->Tanggal }}"> <br/>
        NamaTugas <input type="text" maxlength="50" name="NamaTugas" required="required"> value="{{ $p->Alamat }}"> <br/>
		Status <input type="text" maxlength="1" name="Tanggal" required="required"> value="{{ $p->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
