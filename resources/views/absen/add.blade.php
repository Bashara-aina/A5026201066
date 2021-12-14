
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')


    <form action="/absen/store" class="need-validation col-10" method="post" >
        {{ csrf_field() }}
<div class="form-group">
        <strong>IDPegawai</strong> <select name="idpegawai" class="form-control form-group" >
    @foreach($pegawai as $p)
     <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
    @endforeach
</select>
</div>
        <div class="form-group">
            <label for="dtpickerdemo" class="control-label">Tanggal :</label>
            <div class='input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <div class="form-group">
        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale : 'id',
                    "defaultDate": new Date(),
                });
            });
        </script>
        </div>

        Status <br />
        <input type="radio" id="html" name="status" value="I">
        <label for="html">Izin</label><br>
        <input type="radio" id="css" name="status" value="S">
        <label for="css">Sakit</label><br>
        <input type="radio" id="javascript" name="status" value="A">
        <label for="javascript">Alpha</label> <br>
        <input type="radio" id="javascript" name="status" value="H">
        <label for="javascript">Hadir</label>

    <p>
        <input type="submit" value="Simpan Data" class="btn btn-primary btn-lg">
    </p>
    </form>
    <a href="/absen"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
    <br>
@endsection
