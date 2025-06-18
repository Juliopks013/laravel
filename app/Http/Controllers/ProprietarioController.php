<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    function formulario() {
        return view('proprietario-formulario');
    }
}
