@extends('layout/bahagia')

@section('konten')

	<h3>Pencatatan Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-lg btn-warning text-white rounded-5"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

    <div class="col-10" align="center">
        <form action="/pegawai/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>
    <br>

	<table border="3" class="table table-hover table-active col-10 text-center" >
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
                <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
				|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="text-danger">Hapus</a>
			</td>
		</tr>
        </tbody>
		@endforeach
	</table>
    {{ $pegawai->links() }}





@endsection
