<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComponenteController extends Controller
{
    function index(){ 
        $componente = new \App\Models\AlunoModel();

        return view('componente.index', ['alunos'=>$componente::all()]);
    }

    function add(Request $dados) { 
        $validator = Validator::make(
		      $dados->all(),
	            [
	                'nome' => 'required|min:3|max:255',
                    'data_inicio' => 'required',
                    'data_fim' => 'required',
	            ],
	            [
	                'nome.required' => 'O campo nome é obrigatório.',
	                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
	                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
	                
                    
                    'data_inicio.required' => 'O campo Data de Inicio é Obrigatório.',
                    'data_fim.required' => 'O campo Data de Fim é Obrigatório.',


	            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->route('componente.index')
                ->withErrors($validator)
                ->withInput();
        }
        

        $componente = new \App\Models\ComponenteModel();
        $componente::create($dados->all());

        //RECUPERANDO TODOS ALUNOS DO BANCO E ENVIANDO PARA A VIEW
				
        $componentes = new \App\Models\ComponenteModel();

        return view('componente.index', ['success'=>'Cadastrado!', 'componentes'=>$componentes::all()]);
    }
}

