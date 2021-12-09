@extends('layout/bahagia')

@section('konten')

	<h3>Pencatatan Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-lg btn-warning text-white rounded-5"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="3" class="table table-hover table-active col-10 text-center">
        <thead class="bg-primary">
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
        </thead>
		@foreach($pegawai as $p)
        <tbody>
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="text-danger">Hapus</a>
			</td>
		</tr>
        </tbody>
		@endforeach
	</table>




@endsection
