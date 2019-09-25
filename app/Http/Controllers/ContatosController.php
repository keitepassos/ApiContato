<?php

namespace App\Http\Controllers;

use App\Contatos;
use Illuminate\Http\Request;

class ContatosController extends Controller
{
   
    public function index()
    {
         $result = Contatos::all();
        
         return response()->json($result);
    }

    public function store(Request $request){
       
            return response()
            ->json(
                Contatos::create($request->all()),
                201
            );
    }

    public function show(int $id){
  

        $result = Contatos::find($id);
        if (is_null($result)) {
            return response()->json('Não encontrado', 404);
        }

        return response()->json($result);
    }

    public function update(int $id, Request $request)
    {
        $result = Contatos::find($id);
        if (is_null($result)) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }
        $result->fill($request->all());
        $result->save();

        return $result;
    }

    public function destroy(int $id)
    {
        $qtdRecursosRemovidos = Contatos::destroy($id);
        if ($qtdRecursosRemovidos === 0) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }

        return response()->json('Sucesso', 204);
    }

    //
}
