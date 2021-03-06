<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum2js', function(){

    return view('praktikum2');
});

Route::get('tugas4', function(){
    return view('jquery');
});

Route::get('ets2021',"ViewController@showETS");

Route::get('tugasphp',"ViewController@showETS") ;
Route::post('tugasphp',"ViewController@showETS") ;

//route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/view/{id}','PegawaiController@detail');

// UDAH KE BAGIAN TUGAS PEGAWAI


//route CRUD
Route::get('/tugas','TugasController@index');

Route::get('/tugas/tambah','TugasController@tambah');

Route::post('/tugas/store','TugasController@store');

Route::get('/tugas/edit/{id}','TugasController@edit');

Route::post('/tugas/update','TugasController@update');

Route::get('/tugas/hapus/{id}','TugasController@hapus');

Route::get('/tugas/cari','TugasController@cari');

Route::get('/tugas/view/{id}','TugasController@detail');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/view/{id}','AbsenController@detail');
Route::get('/absen/cari','AbsenController@cari');



// route CRUD tumbuhan
Route::get('/tumbuhan','TumbuhanController@index');
Route::get('/tumbuhan/tambah','TumbuhanController@tambah');
Route::post('/tumbuhan/store','TumbuhanController@store');
Route::get('/tumbuhan/edit/{id}','TumbuhanController@edit');
Route::post('/tumbuhan/update','TumbuhanController@update');
Route::get('/tumbuhan/hapus/{id}','TumbuhanController@hapus');
Route::get('/tumbuhan/cari','TumbuhanController@cari');
Route::get('/tumbuhan/view/{id}','TumbuhanController@detail');


// route CRUD nilai
Route::get('/nilaikuliah','NilaiKuliahController@index');
Route::get('/nilaikuliah/tambah','NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','NilaiKuliahController@store');
Route::get('/nilaikuliah/edit/{id}','NilaiKuliahController@edit');
Route::post('/nilaikuliah/update','NilaiKuliahController@update');
Route::get('/nilaikuliah/hapus/{id}','NilaiKuliahController@hapus');
Route::get('/nilaikuliah/cari','NilaiKuliahController@cari');
Route::get('/nilaikuliah/view/{id}','NilaiKuliahController@detail');

?>
