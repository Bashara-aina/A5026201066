@extends('layout/bahagia')

@section('konten')


<h3>Edit Data Nilai</h3>

<a href="/nilaikuliah"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

    <div class="container">
        @foreach($nilaikuliah as $n)
        <form action="/nilaikuliah/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $n->ID }}">
            <div class="form-group">
                <label for="NRP">NRP</label>
                <input type="text" class="form-control" name="NRP" id="NRP" placeholder="NRP" required="required" value="{{ $n->NRP }}">
              </div>
            <div class="form-group">
                <label for="SKS">SKS</label>
                <input type="number" class="form-control" name="SKS" id="SKS" placeholder="Jumlah SKS" required="required" value="{{ $n->SKS }}">
            </div>
            <div class="form-group">
                <label for="NilaiAngka">Nilai Angka</label>
                <input type="number" class="form-control" name="NilaiAngka" id="NilaiAngka" placeholder="Nilai Angka" required="required" value="{{ $n->NilaiAngka }}">
            </div>
            <br>
            <input type="submit" value="Simpan Data" class="btn btn-primary btn-lg">
          </form>
          @endforeach
        </div>
@endsection
