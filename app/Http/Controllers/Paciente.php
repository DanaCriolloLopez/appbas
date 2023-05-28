<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paciente extends Controller
{
    public function paciente(){
        return view('cita');
    }
}

