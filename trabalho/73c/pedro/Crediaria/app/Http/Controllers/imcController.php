<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imcController extends Controller
{
    //
    public function index(Request $req)
    {
        # code...
        $altura = $req->input('altura');
        $peso =  $req->input('peso');
        $calcula =  $peso / ($altura * $altura);
        return view("IMC_IMPRIMIR.imprime", compact("calcula"));
    }
}
