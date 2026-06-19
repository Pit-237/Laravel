<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function index(){ 
        $admin = new \App\Models\AdminModel();

        return view('admin.index', ['admins'=>$admin::all()]);
    }

    function add(Request $dados) { 
		$validator = Validator::make(
			$dados->all(),
			[
				'nome' => 'required|min:3|max:255',
				'email' => 'required|email',
				'telefone' => 'required|min:11|max:14',
				'cpf' => 'required|min:11|max:14',
				'usuario' => 'required|min:5|max:255',
				'senha' => 'required|min:5',
				'status' => 'required',
			],
			[
				'nome.required' => 'O campo nome é obrigatório.',
				'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
				'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',

				'email.required' => 'O campo email é obrigatório.',
				"email.email" => 'O campo email deve ser um endereço de email válido.',

				'telefone.required' => 'O campo telefone é obrigatório.',
				'telefone.min' => 'O campo telefone deve conter no mínimo 11 caracteres.',
				'telefone.max' => 'O campo telefone deve conter no máximo 14 caracteres.',

				'cpf.required' => 'O campo CPF é obrigatório.',
				'cpf.min' => 'O campo CPF deve conter no mínimo 11 caracteres.',
				'cpf.max' => 'O campo CPF deve conter no máximo 14 caracteres.',

				'usuario.required' => 'O campo usuário é obrigatório.',
				'usuario.min' => 'O campo usuário deve conter no mínimo 5 caracteres.',
				'usuario.max' => 'O campo usuário deve conter no máximo 255 caracteres.',

				'senha.required' => 'O campo senha é obrigatório.',
				'senha.min' => 'O campo senha deve conter no mínimo 5 caracteres.',

				'status.required' => 'O campo status é obrigatório.',
			]
		);


        if ($validator->fails()) {
            return redirect()
                ->route('admin.index')
                ->withErrors($validator)
                ->withInput();
        }
        


        $admin = new \App\Models\AdminModel();
        $admin::create($dados->all());

        //RECUPERANDO TODOS OS ADMINISTRADORES DO BANCO E ENVIANDO PARA A VIEW
        $admins = new \App\Models\AdminModel();

        return view('admin.index', ['success'=>'Cadastrado!', 'admins'=>$admins::all()]);
    }

    function remove(string $id) {
        $admin = new \App\Models\AdminModel();
        $admin::destroy($id);

        return view('admin.index', ['success'=>'Removido!', 'admins'=>$admin::all()]);

    }

    function atualizar(string $id) {
        $admin = new \App\Models\AdminModel();
        $admin = $admin::find($id);

        return view('admin.atualizar', ['admin'=>$admin]);
    }

    function save(Request $dados) {
        $admin = new \App\Models\AdminModel();
        $admin = $admin::find($dados->id);
        $admin->update($dados->all());

        return view('admin.index', ['success'=>'Atualizado!', 'admins'=>$admin::all()]);
    }
}

