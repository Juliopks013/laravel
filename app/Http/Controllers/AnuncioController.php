<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    function anuncio(){
			return view('anuncio-formulario');
    }

    function anuncio(){
        return view('anuncio-store');
    }

    function anuncio(){
        return view('anuncio-listar');
    }

    function anuncio(){
        return view('anuncio-remover');
    }
    
    function anuncio(){
        return view('anuncio-editar');
    }
}
