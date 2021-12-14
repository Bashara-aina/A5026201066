@extends('layout.bahagia')

@section('title', 'Mengedit Data Absensi')
@section('judulhalaman', 'Edit Absensi Pegawai')

@section('konten')

 @foreach($absen as $a)
 <div class="form-group">
 <form action="/absen/update" class="need-validation col-10" method="post">
     {{ csrf_field() }}
     <input type="hidden" name="id" value="{{ $a->ID }}" readonly>
     <strong> IDPegawai</strong>
     <br>
     <input type="text" value="{{$a->pegawai_nama}}"readonly>
 </div>
             <div class="form-group col-10">
                 <label for="dtpickerdemo" class=" control-label ">Tanggal :</label>
                 <div class='input-group date ' id='dtpickerdemo'>
                     <input type="text" name="Tanggal" class="form-control" required="required" value="{{ $a->Tanggal }} " readonly>
                     <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                 </div>


                 Status
                 <br>
             <input type="text" value="{{$a->Status}}" readonly></input>
             </div>

 </form>
 @endforeach

 <a href="/absen"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
@endsection
