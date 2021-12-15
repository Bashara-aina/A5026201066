@extends('layout/bahagia')

@section('konten')

<h3>Pencatatan Data nilaikuliah</h3>

<a href="/nilaikuliah/tambah" class="btn btn-lg btn-warning text-white rounded-5"> + Tambah nilaikuliah</a>

<br/>
<br/>

        <div class="col-10" align="center">
            <form action="/nilaikuliah/cari" method="GET">
                <input type="text" class="form-control" name="cari" placeholder="Cari nilaikuliah .." value="{{ old('cari') }}">
                <input type="submit" class="btn btn-default" value="CARI">
            </form>
        </div>



        <br>

        <table border="3" class="table table-hover table-active col-10 text-center" >
            <thead class="bg-primary">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>NilaiAngka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
                <th>Opsi</th>
            </tr>
            </thead>
            @foreach($nilaikuliah as $n)
            <tbody>
                <tr>
                    <td>{{ $n->ID }}</td>
                    <td>{{ $n->NRP }}</td>
                    <td>{{ $n->NilaiAngka }}</td>
                    <td>{{ $n->SKS }}</td>
                    <td>
                    <?php
                    if($n->NilaiAngka <=40){
                        echo "D";
                    } elseif ($n->NilaiAngka >=41 && $n->NilaiAngka <=60) {
                        echo "C";
                    } elseif ($n->NilaiAngka >=61 && $n->NilaiAngka <=80) {
                        echo "B";
                    } else{
                        echo "A";
                    }
                    ?> </td>
                    <td>
                        <?php
                        $bobot = $n->NilaiAngka * $n->SKS;
                        echo $bobot;
                        ?></td>
                    <td>
                        <a href="/nilaikuliah/view/{{ $n->ID }}">View Detail</a>
                        |
                        <a href="/nilaikuliah/edit/{{ $n->ID }}">Edit</a>
                        |
                        <a href="/nilaikuliah/hapus/{{ $n->ID }}" class="text-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>

              {{ $nilaikuliah->links() }}

          <p class="pt-1">
            Konversi Nilai: <br>
            D : <= 40 <br>
            C : 41 <= NA <= 60 <br>
            B : 61 <= NA <= 80 <br>
            A : >= 81 <br>
            </p>
            <br>
@endsection
