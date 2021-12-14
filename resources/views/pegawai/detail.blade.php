@extends('layout.bahagia')

@section('konten')

	<h3>View Pegawai</h3>

	<a href="/pegawai"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

	@foreach($pegawai as $p)

	<div class="col-10">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        Nama
        <div class="form-group form-control">
		{{ $p->pegawai_nama }}
        </div>
        Jabatan
        <div class="form-group form-control">
		{{ $p->pegawai_jabatan }}
        </div>
        Umur
        <div class="form-group form-control">
		{{ $p->pegawai_umur }}
        </div>
        Alamat
        <div class="form-group form-control">
		{{ $p->pegawai_alamat }}
        </div>
	</div>
	@endforeach


@endsection
