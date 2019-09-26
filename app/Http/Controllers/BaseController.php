<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Request;

abstract class BaseController
{
    protected $classe;
    
    public function index(Request $request)
    {
        $result = $this->classe::paginate();
        
        return response()->json($result);
    } 

    public function store(Request $request){
       
            return response()
            ->json(
                $this->classe::create($request->all()),
                201
            );
    }

    public function show(int $id){
  

        $result = $this->classe::find($id);
        if (is_null($result)) {
            return response()->json('Não encontrado', 404);
        }

        return response()->json($result);
    }

    public function update(int $id, Request $request)
    {
        $result = $this->classe::find($id);
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
        $qtdRecursosRemovidos = $this->classe::destroy($id);
        if ($qtdRecursosRemovidos === 0) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }

        return response()->json([
                    'ok' => 'sucessi'
                ], 100);
    }
}
