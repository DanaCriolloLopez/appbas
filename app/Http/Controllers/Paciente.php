<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paciente extends Controller
{
    public function cita(){
        return view('cita');
    }
    public function editar(){
        return view('editar_pa');
    }
    public function registrar(){
        return view('registrar_pa');
    }
    public function bit_pa(){
        return view('bitacora_pacientes');
    }
    public function listar_pa(){
        return view('lst_pac');
    }
}

