<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
    	// mengambil data dari table nilaikuliah
    	// $nilaikuliah = DB::table('nilaikuliah')->get();

        $nilaikuliah = DB::table('nilaikuliah')->paginate(5);
    	// mengirim data nilaikuliah ke view index
    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah],["active" => "nilaikuliah_aktif"]);

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table nilaikuliah sesuai pencarian data
		$nilaikuliah = DB::table('nilaikuliah')
		->where('NRP','like',"%".$cari."%")
		->paginate(5);

    		// mengirim data nilaikuliah ke view index
		return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah],["active" => "nilaikuliah_aktif"]);

	}

    // method untuk menampilkan view form tambah nilaikuliah
    public function tambah()
    {

        // memanggil view tambah
        return view('nilaikuliah.tambah', ["active" => "nilaikuliah_aktif"]);

    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'nilaiangka' => $request->nilaiangka,
            'SKS' => $request->SKS
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');

    }

    // method untuk edit data nilaikuliah
    public function edit($ID)
    {
        // mengambil data nilaikuliah berdasarkan id yang dipilih
        $nilaikuliah = DB::table('nilaikuliah')->where('ID',$ID)->get();
        // passing data nilaikuliah yang didapat ke view edit.blade.php
        return view('nilaikuliah.edit',['nilaikuliah' => $nilaikuliah],["active" => "nilaikuliah_aktif"]);

    }

    //method untuk detail data nilaikuliah
    public function detail($ID)
    {
        // mengambil data nilaikuliah berdasarkan id yang dipilih
        $nilaikuliah = DB::table('nilaikuliah')->where('ID',$ID)->get();
        // passing data nilaikuliah yang didapat ke view edit.blade.php
        return view('nilaikuliah.detail',['nilaikuliah' => $nilaikuliah],["active" => "nilaikuliah_aktif"]);

    }

    // update data nilaikuliah
    public function update(Request $request)
    {
        // update data nilaikuliah
        DB::table('nilaikuliah')->where('ID',$request->ID)->update([
            'NRP' => $request->NRP,
            'nilaiangka' => $request->nilaiangka,
            'SKS' => $request->SKS
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }

    // method untuk hapus data nilaikuliah
    public function hapus($ID)
    {
        // menghapus data nilaikuliah berdasarkan id yang dipilih
        DB::table('nilaikuliah')->where('ID',$ID)->delete();

        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }

    public function nilaiHuruf($ID)
    {


    }

}
