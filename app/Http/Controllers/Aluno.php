<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        $alunos = [
            (Object) ['nome'=>'Leonardo', 'telefone'=>'99825', 'email'=>'leo237@email.com'],
            (Object) ['nome'=>'Guilherme', 'telefone'=>'88952', 'email'=>'gui257@email.com'],
            (Object) ['nome'=>'Mayra', 'telefone'=>'55829', 'email'=>'may666@email.com'],

        ];

        return view('aluno', compact('alunos'));
    }

    function add($nome, $telefone, $email){
        //adicione os dados ao array de alunos e envie para a view
    }
}
