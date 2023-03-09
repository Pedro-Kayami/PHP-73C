<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComidaControler extends Controller
{

    public function index(Request $req)
    {
        // dd($req);
        // return "ESTOU  NO CONTROLE";
        $nome = $req->input('nome');
        $qntd = $req->input('qntd');
        $preco = $req->input('preco');
        // dd($nome);
        $Comidas = [
            ["nome" => $nome, "qntd" => $qntd, "preco" => $preco],
        ];
        return view("Comidas.index", compact("Comidas"));
    }
}
