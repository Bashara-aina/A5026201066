@extends('layout/bahagia')


@section('konten')

    <h3>View Tumbuhan</h3>
	<a href="/tumbuhan"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

    <div class="container-fluid col-10">
        @foreach ($tumbuhan as $t)
		{{ csrf_field() }}
                Nama tumbuhan
            <div class="form-group form-control">
                {{ $t->namatumbuhan }}
            </div>
                Jumlah tumbuhan
                <div class="form-group form-control">
                {{ $t->jumlahtumbuhan }}
            </div>
                Tersedia
            <div class="form-group form-control">
                <p>{{ $t->tersedia }}</p>
            </div>
            <p class="pt-1">
                <label>Keterangan Tersedia:</label> <br>
                Y : Ya <br>
                T : Tidak <br>
                </p>
        @endforeach
    </div>
@endsection
