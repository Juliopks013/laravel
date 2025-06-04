<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    function formulario(){
			return view('veiculo-formulario');
    }
    function formulario(){
        return view('veiculo-store');
    }
    function formulario(){
        return view('veiculo-listar');
    }
    function formulario(){
        return view('veiculo-remover');
    }
    function formulario(){
        return view('veiculo-editar');
    }
}

