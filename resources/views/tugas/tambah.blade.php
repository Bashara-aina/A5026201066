@extends('layout.bahagia')

@section('konten')

	<h3>Tambah Data Pegawai</h3>

	<a href="/tugas"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

	<form action="/tugas/store" class="need-validation col-10" method="post">
		{{ csrf_field() }}
        <div class="form-group">
		    IDPegawai <input type="number" name="IDPegawai" class="form-control" required="required">
        </div>
        <div class="form-group">
		    Tanggal <input type="datetime-local" name="Tanggal" class="form-control" required="required">
        </div>
        <div class="form-group">
            NamaTugas <input type="text" maxlength="50" name="NamaTugas" class="form-control" required="required">
        </div>
        <div class="form-group">
		    Status <input type="text" maxlength="1" name="Status" class="form-control" required="required">
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary btn-lg">
	</form>
    <p>
        Keterangan Status: <br>
        0 : Belum Selesai <br>
        1 : Selesai <br>
    </p>

@endsection
