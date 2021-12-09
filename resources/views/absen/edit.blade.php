
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

<h3>{{ $judul }}</h3>
	@foreach($absen as $a)
    <div class="form-group">
	<form action="/absen/update" class="need-validation col-10" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
        IDPegawai <select name="idpegawai"  class="form-control" >
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
    </div>
                <div class="form-group col-10">
                    <label for="dtpickerdemo" class=" control-label ">Tanggal :</label>
                    <div class='input-group date ' id='dtpickerdemo'>
                        <input type="datetime-local" name="Tanggal" class="form-control" required="required" value="{{ $a->Tanggal }}">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
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

                Status <br />
                <input type="radio" id="html" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                <label for="html">Izin</label><br>
                <input type="radio" id="css" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                <label for="css">Sakit</label><br>
                <input type="radio" id="javascript" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                <label for="javascript">Alpha</label>
                <p><input type="submit" value="Simpan Data" class="btn btn-primary btn-lg"></p>
	</form>
	@endforeach

    <a href="/absen"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
   @endsection
