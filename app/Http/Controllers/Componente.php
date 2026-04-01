<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
        function show() { 
                $componentes = [
                    (Object) ['nome'=>'PHP', 'horario'=>'03:33'],
                    (Object) ['nome'=>'JavaScript', 'horario'=>'03:00'],
                    (Object) ['nome'=>'Python', 'horario'=>'12:00']
                ];
            return view('componente', compact('componentes'));
        }   
}
