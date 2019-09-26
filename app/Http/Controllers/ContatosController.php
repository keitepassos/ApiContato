<?php

namespace App\Http\Controllers;

use App\Contatos;


class ContatosController extends BaseController
{
   
    public function __construct()
    {
        $this->classe = Contatos::class;
    }

    //
}
