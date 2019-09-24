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
       // var_dump($request->nome);
        //exit;
        
        //return response()
            //  ->json(Contatos::create(['con_nome'=>$request->nome]), status:201);

            return response()
            ->json(
                Contatos::create($request->all()),
                201
            );
    }

    //
}
