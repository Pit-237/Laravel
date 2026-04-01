<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show() { 
            $professores = [
                (Object) ['nome'=>'Diogo', 'cpf'=>'99825'],
                (Object) ['nome'=>'Amauri', 'cpf'=>'20425'],
                (Object) ['nome'=>'Selma', 'cpf'=>'00001']
            ];
        return view('professor', compact('professores'));
    }
}
 