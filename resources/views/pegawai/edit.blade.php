@extends('layout.bahagia')

@section('konten')

	<h3>Edit Pegawai</h3>

	<a href="/pegawai"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" class="need-validation col-10" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group">
		    Nama <input type="text" required="required" class="form-control" name="nama" value="{{ $p->pegawai_nama }}">
        </div>
        <div class="form-group">
		Jabatan <input type="text" required="required" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        </div>
        <div class="form-group">
		Umur <input type="number" required="required" class="form-control" name="umur" value="{{ $p->pegawai_umur }}">
        </div>
        <div class="form-group">
		Alamat <textarea required="required" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary btn-lg">
	</form>
	@endforeach


@endsection
