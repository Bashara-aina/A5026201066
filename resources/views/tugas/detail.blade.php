@extends('layout/bahagia')

@section('konten')

	<h3>Detail tugas</h3>

	<a href="/tugas"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

	@foreach($tugas as $t)

    <div class="col-10">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->IDPegawai }}"> <br/>
        Nama
        <div class="form-group form-control">
		{{ $t->Tanggal }}
        </div>
        Jabatan
        <div class="form-group form-control">
		{{ $t->NamaTugas }}
        </div>
        Umur
        <div class="form-group form-control">
		{{ $t->Status }}
        </div>
	</div>

	@endforeach


@endsection
