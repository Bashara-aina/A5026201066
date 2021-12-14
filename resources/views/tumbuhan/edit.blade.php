@extends('layout/bahagia')

@section('konten')


<h3>Edit Data Tumbuhan</h3>

<a href="/tumbuhan"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>

    <div class="container">
        @foreach($tumbuhan as $t)
        <form action="/tumbuhan/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->kodetumbuhan }}">
            <div class="form-group">
                <label for="namatumbuhan">Nama tumbuhan</label>
                <input type="text" class="form-control" name="namatumbuhan" id="namatumbuhan" placeholder="nama tumbuhan" required="required" value="{{ $t->namatumbuhan }}">
              </div>
            <div class="form-group">
                <label for="jumlahtumbuhan">Jumlah tumbuhan</label>
                <input type="number" class="form-control" name="jumlahtumbuhan" id="jumlahtumbuhan" placeholder="Jumlah tumbuhan" required="required" value="{{ $t->jumlahtumbuhan }}">
            </div>
            <p><strong>Tersedia</strong></p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ya" name="tersedia" class="custom-control-input" value="Y" @if ($t->tersedia === "Y" ) checked="checked" @endif>
                <label class="custom-control-label" for="ya">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="tersedia" class="custom-control-input" value="T" @if ($t->tersedia === "T" ) checked="checked" @endif>
                <label class="custom-control-label" for="tidak">Tidak</label>
            </div>
            <br>
            <input type="submit" value="Simpan Data" class="btn btn-primary btn-lg">
          </form>
          @endforeach
        </div>
@endsection
