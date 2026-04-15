<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function form(){
        return view('aluno.form');
    }

    function adicionar(Request $dados){
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

        return view('aluno.form', ['sucesso'=> 'Aluno cadastrado']);
    }

    function remover(Request $dados){

    }

    function atualizar(Request $dados){

    }

    function consultar(){

    }

}
