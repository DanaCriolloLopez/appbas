<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fisioterapeutas extends Controller
{
    public function registro_fisio(){
        return view('registro_fisio');
    }
    public function listar_fisio(){
        return view('lst_fisio');
    }
}
