@extends('layout/bahagia')

@section('konten')

<h3>Pencatatan Data Tumbuhan</h3>

<a href="/tumbuhan/tambah" class="btn btn-lg btn-warning text-white rounded-5"> + Tambah Tumbuhan</a>

<br/>
<br/>

        <div class="col-10" align="center">
            <form action="/tumbuhan/cari" method="GET">
                <input type="text" class="form-control" name="cari" placeholder="Cari tumbuhan .." value="{{ old('cari') }}">
                <input type="submit" class="btn btn-default" value="CARI">
            </form>
        </div>



        <br>

        <table border="3" class="table table-hover table-active col-10 text-center" >
            <thead class="bg-primary">
            <tr>
                <th>Nama tumbuhan</th>
                <th>Jumlah tumbuhan</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            </thead>
            @foreach($tumbuhan as $t)
            <tbody>
                <tr>
                    <td>{{ $t->namatumbuhan }}</td>
                    <td>{{ $t->jumlahtumbuhan }}</td>
                    <td>{{ $t->tersedia }}</td>
                    <td>
                        <a href="/tumbuhan/view/{{ $t->kodetumbuhan }}">View Detail</a>
                        |
                        <a href="/tumbuhan/edit/{{ $t->kodetumbuhan }}">Edit</a>
                        |
                        <a href="/tumbuhan/hapus/{{ $t->kodetumbuhan }}" class="text-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>

              {{ $tumbuhan->links() }}

          <p class="pt-1">
            Keterangan Tersedia: <br>
            Y : Ya <br>
            T : Tidak <br>
            </p>
            <br>
@endsection
