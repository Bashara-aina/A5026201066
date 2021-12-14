@extends('layout/bahagia')

@section('konten')

	<h2>Daftar Absensi Pegawai</h2>


	<a href="/absen/add" class="btn btn-lg btn-warning text-white rounded-5"> + Tambah Absensi</a>

	<br/>
	<br/>

	<table border="3" class="table table-hover table-active col-10 text-center">
        <thead class="bg-primary"
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
        </thead>
		@foreach($absen as $a)
        <tbody>
		<tr>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
                <a href="/absen/view/{{ $a->ID }}">View Detail</a>
				|
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}" class="text-danger">Delete Absensi</a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        H : Hadir
        </p>

    <div class="container d-flex mx-auto">
        {{ $absen->links() }}
        </div>
        <br>

@endsection
