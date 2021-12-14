@extends('layout/bahagia')

@section('konten')

<div class="container">
    <form  action="/tumbuhan/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="namatumbuhan">Nama tumbuhan</label>
          <input type="text" class="form-control" name="namatumbuhan" id="namatumbuhan" placeholder="nama tumbuhan" required="required">
        </div>
        <div class="form-group">
            <label for="jumlahtumbuhan">Jumlah tumbuhan</label>
            <input type="number" class="form-control" name="jumlahtumbuhan" id="jumlahtumbuhan" placeholder="Jumlah tumbuhan" required="required">
        </div>
        <p><strong>Tersedia</strong></p>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="ya" name="tersedia" class="custom-control-input" value="Y">
            <label class="custom-control-label" for="ya">Ya</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="tidak" name="tersedia" class="custom-control-input" value="T">
            <label class="custom-control-label" for="tidak">Tidak</label>
        </div>
        <div class="form-group d-flex justify-content-between mt-4">
            <a href="/tumbuhan" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data </button>
        </div>
      </form>
</div>

@endsection
