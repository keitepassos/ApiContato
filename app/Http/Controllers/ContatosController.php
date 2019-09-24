<?php

namespace App\Http\Controllers;

use App\Contatos;
use Illuminate\Http\Request;

class ContatosController extends Controller
{
   
    public function index()
    {
        return ['rods','keito'];
    }

    public function cadastrar(Request $request){
        return ['rodolpho','jailson'];
        //return response()
            //  ->json(Contatos::create(['con_nome'=>$request->nome]), status:201);
    }

    //
}
