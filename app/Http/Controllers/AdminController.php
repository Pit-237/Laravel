<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){ 
        return view('admin.index');
    }

    function add(Request $dados) { 
        $admin = new \App\Models\AdminModel();
        $admin::create($dados->all());

        //RECUPERANDO TODOS ALUNOS DO BANCO E ENVIANDO PARA A VIEW
				
        $componentes = new \App\Models\AdminModel();

        return view('admin.index', ['success'=>'Cadastrado!', 'admins'=>$admins::all()]);
    }
}
