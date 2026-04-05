<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show() { 
            $cursos = [
                (Object) ['nome'=>'Desenvolvimento de Sistemas', 'periodo'=>'Madrugada'],
                (Object) ['nome'=>'Design Grafico', 'periodo'=>'Tarde'],
                (Object) ['nome'=>'Quality Assurance', 'periodo'=>'Manhã']
            ];
        return view('curso', compact('cursos'));
    }
}
