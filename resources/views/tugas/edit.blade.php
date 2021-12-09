@extends('layout/bahagia')

@section('konten')

	<h3>Edit tugas</h3>

	<a href="/tugas"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

	@foreach($tugas as $p)
	<form action="/tugas/update" class="need-validation col-10" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            IDPegawai <input type="number" name="IDPegawai" class="form-control" required="required" value="{{ $p->IDPegawai }}">
        </div>
        <div class="form-group">
            Tanggal <input type="datetime-local" name="Tanggal" class="form-control" required="required" value="{{ $p->Tanggal }}">
        </div>
        <div class="form-group">
            NamaTugas <input type="text" maxlength="50" name="NamaTugas" class="form-control" required="required" value="{{ $p->NamaTugas }}">
        </div>
        <div class="form-group">
            Status <input type="text" maxlength="1" name="Tanggal" class="form-control" required="required" value="{{ $p->Status }}">
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary btn-lg">
	</form>
	@endforeach


@endsection
