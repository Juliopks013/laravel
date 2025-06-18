<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    function formulario() {
        return view('anuncio-formulario');
    }
}
