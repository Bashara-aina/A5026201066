<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tugas_Controller extends Controller
{
    //
    function showETS() {
        //source untuk data / proses bisnis yg di olah
        return view('ets') ;
    }

    function tugas_php() {
        //source untuk data / proses bisnis yg di olah
        return view('tugasphp') ;
    }

}
