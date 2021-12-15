@extends('layout/bahagia')


@section('konten')

    <h3>View Tumbuhan</h3>
	<a href="/tumbuhan"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

    @foreach($nilaikuliah as $n)
	<div class="col-10">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $n->ID }}"> <br/>
        NRP
        <div class="form-group form-control">
		{{ $n->NRP }}
        </div>
        Nilai Angka
        <div class="form-group form-control">
		{{ $n->nilaiangka }}
        </div>
        SKS
        <div class="form-group form-control">
		{{ $n->SKS }}
        </div>
	</div>
        @endforeach
    </div>
@endsection
