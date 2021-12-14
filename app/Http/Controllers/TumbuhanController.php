<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TumbuhanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table tumbuhan
    	// $tumbuhan = DB::table('tumbuhan')->get();

        $tumbuhan = DB::table('tumbuhan')->paginate(5);
    	// mengirim data tumbuhan ke view index
    	return view('tumbuhan.index',['tumbuhan' => $tumbuhan],["active" => "tumbuhan_aktif"]);

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table tumbuhan sesuai pencarian data
		$tumbuhan = DB::table('tumbuhan')
		->where('namatumbuhan','like',"%".$cari."%")
		->paginate();

    		// mengirim data tumbuhan ke view index
		return view('tumbuhan.index',['tumbuhan' => $tumbuhan],["active" => "tumbuhan_aktif"]);

	}

    // method untuk menampilkan view form tambah tumbuhan
    public function tambah()
    {

        // memanggil view tambah
        return view('tumbuhan.tambah', ["active" => "tumbuhan_aktif"]);

    }

    // method untuk insert data ke table tumbuhan
    public function store(Request $request)
    {
        // insert data ke table tumbuhan
        DB::table('tumbuhan')->insert([
            'namatumbuhan' => $request->namatumbuhan,
            'jumlahtumbuhan' => $request->jumlahtumbuhan,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman tumbuhan
        return redirect('/tumbuhan');

    }

    // method untuk edit data tumbuhan
    public function edit($id)
    {
        // mengambil data tumbuhan berdasarkan id yang dipilih
        $tumbuhan = DB::table('tumbuhan')->where('kodetumbuhan',$id)->get();
        // passing data tumbuhan yang didapat ke view edit.blade.php
        return view('tumbuhan.edit',['tumbuhan' => $tumbuhan],["active" => "tumbuhan_aktif"]);

    }

    //method untuk detail data tumbuhan
    public function detail($id)
    {
        // mengambil data tumbuhan berdasarkan id yang dipilih
        $tumbuhan = DB::table('tumbuhan')->where('kodetumbuhan',$id)->get();
        // passing data tumbuhan yang didapat ke view edit.blade.php
        return view('tumbuhan.detail',['tumbuhan' => $tumbuhan],["active" => "tumbuhan_aktif"]);

    }

    // update data tumbuhan
    public function update(Request $request)
    {
        // update data tumbuhan
        DB::table('tumbuhan')->where('kodetumbuhan',$request->id)->update([
            'namatumbuhan' => $request->namatumbuhan,
            'jumlahtumbuhan' => $request->jumlahtumbuhan,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman tumbuhan
        return redirect('/tumbuhan');
    }

    // method untuk hapus data tumbuhan
    public function hapus($id)
    {
        // menghapus data tumbuhan berdasarkan id yang dipilih
        DB::table('tumbuhan')->where('kodetumbuhan',$id)->delete();

        // alihkan halaman ke halaman tumbuhan
        return redirect('/tumbuhan');
    }
}
