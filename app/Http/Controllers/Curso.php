<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show() { 
            $cursos = [
                (Object) ['nome'=>'PHP', 'periodo'=>'40 horas'],
                (Object) ['nome'=>'JavaScript', 'periodo'=>'30 horas'],
                (Object) ['nome'=>'Python', 'periodo'=>'50 horas']
            ];
        return view('curso', compact('cursos'));
    }
}
