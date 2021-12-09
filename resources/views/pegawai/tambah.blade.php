@extends('layout.bahagia')

@section('konten')

	<h3>Tambah Data Pegawai</h3>

	<a href="/pegawai"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

    <form id="form" class="need-validation col-10" novalidate action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
		    Nama
            <input type="text" name="nama" required="required" class="form-control">
        </div>
        <div class="form-group">
		    Jabatan <input type="text" name="jabatan" required="required" class="form-control">
        </div>
        <div class="form-group">
		Umur <input type="number" name="umur" required="required" class="form-control">
        </div>
        <div class="form-group">
		Alamat <textarea name="alamat" required="required" class="form-control"></textarea>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary btn-lg">
	</form>
@endsection
