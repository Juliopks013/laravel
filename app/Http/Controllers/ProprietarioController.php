<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    function proprietario(){
			return view('proprietario-formulario');
    }

    function proprietario(){
        return view('proprietario-store');
    }

    function proprietario(){
        return view('proprietario-listar');
    }

    function proprietario(){
        return view('proprietario-remover');
    }
    
    function proprietario(){
        return view('proprietario-editar');
    }
}
