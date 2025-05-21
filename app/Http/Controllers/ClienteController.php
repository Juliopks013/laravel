<?php

namespace App\Http\Controllers;
use Aapp\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    function add(){
        return view ('add-cliente');
    }
    function store(Request $dados) {
        $cliente = new ClienteModel();
        $cliente->create(dados->all());
        }
}
