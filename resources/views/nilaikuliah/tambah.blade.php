@extends('layout/bahagia')

@section('konten')

<a href="/pegawai"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

<div class="container">
    <form  action="/nilaikuliah/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="NRP">NRP</label>
          <input type="text" class="form-control" name="NRP" id="NRP" placeholder="NRP" required="required" maxlength="6">
        </div>
        <div class="form-group">
            <label for="nilaiangka">Nilai Angka</label>
            <input type="number" class="form-control" name="nilaiangka" id="nilaiangka" placeholder="nilang angka kuliah" required="required">
        </div>

        <div class="form-group">
            <label for="SKS">SKS</label>
            <input type="number" class="form-control" name="SKS" id="SKS" placeholder="Jumlah SKS" required="required">
        </div>
        <p>
            <input type="submit" value="Simpan Data" class="btn btn-primary btn-lg">
        </p>
    </form>



@endsection
