<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $tugas = DB::table('tugas')->paginate(5);

        // mengirim data pegawai ke view index
        return view('tugas.index',['tugas' => $tugas]);

    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('tugas.tambah');

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table tugas sesuai pencarian data
		$tugas = DB::table('tugas')
		->where('IDPegawai','like',"%".$cari."%")
		->paginate();

    		// mengirim data tugas ke view index
		return view('tugas.index',['tugas' => $tugas]);

	}

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('tugas')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');

    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('tugas')->where('ID',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugas.edit',['tugas' => $pegawai]);

    }

    // method untuk melihat detail data pegawai
    public function detail($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih
    $pegawai = DB::table('tugas')->where('ID', $id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('tugas.detail', ['tugas' => $pegawai]);
    }


    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('tugas')->where('ID',$request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tugas')->where('ID',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/tugas');
    }
}
