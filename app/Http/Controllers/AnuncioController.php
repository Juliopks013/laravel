<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnuncioModel;
use App\Models\ProprietarioModel;
use App\Models\VeiculoModel;

class AnuncioController extends Controller
{
    function formulario() {
        $proprietarios = ProprietarioModel::all();
        $veiculos = VeiculoModel::all();
        return view('anuncio-formulario', compact('proprietarios', 'veiculos'));
    }

    function store(Request $dados){
        if ($dados->id == '') {
            //fazemos ação de create aqui...
            $anuncio = new AnuncioModel();
            $anuncio->create($dados->all());
        } else {
            //fazemos a ação de update aqui
            $anuncio = AnuncioModel::find($dados->id); //localiza o registro
            $update = $anuncio->update($dados->all()); //atualiza
        }
        
        //recupera todos os registros atualizados
        $anuncios = AnuncioModel::all();
        
        //após adicionar ou editar redireciona para a página listar
        return view('anuncio-listar', ['anuncios'=>$anuncios]);
    } 

    function listar(){
        $anuncios = AnuncioModel::all();
        
        return view('anuncio-listar', ['anuncios'=>$anuncios]);
    }

    function remove($id){
        AnuncioModel::destroy($id);

        return redirect()->route('anuncio-listar');
    }   

    function editar($id) {
    $anuncio = AnuncioModel::find($id);
    $veiculos = \App\Models\VeiculoModel::all();
    $proprietarios = \App\Models\ProprietarioModel::all();

    return view('anuncio-formulario', compact('anuncio', 'veiculos', 'proprietarios'));
}

}
