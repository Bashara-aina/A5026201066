@extends('layout/bahagia')

@section('konten')

	<h2>Pencatatan data pegawai</h2>

	<a href="/tugas/tambah" class="btn btn-lg btn-warning text-white rounded-5"> + Tambah tugas Baru</a>

	<br/>
	<br/>

    <div class="col-10" align="center">
        <form action="/tugas/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Tugas .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>
    <br>


	<table border="3" class="table table-hover table-active col-10 text-center">
        <thead class="bg-primary">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
        </thead>
		@foreach($tugas as $p)
        <tbody>
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->NamaTugas }}</td>
            <td>{{ $p->Status }}</td>
			<td>
                <a href="/tugas/view/{{ $p->ID }}">View Detail</a>
				|
				<a href="/tugas/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->ID }}" class="text-danger">Hapus</a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        0 : Belum Selesai <br>
        1 : Selesai <br>
    </p>

    <br>

@endsection
