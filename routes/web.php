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

Route::get('ets2021',"Tugas_Controller@showETS");

Route::get('tugasphp',"Tugas_Controller@tugas_php") ;
Route::post('tugasphp',"Tugas_Controller@tugas_php") ;


?>
