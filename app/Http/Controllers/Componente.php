<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
        function show() { 
                $componentes = [
                    (Object) ['nome'=>'PW', 'horario'=>'03:33'],
                    (Object) ['nome'=>'Testes de softwares', 'horario'=>'08:00'],
                    (Object) ['nome'=>'Teoria das cores', 'horario'=>'12:00']
                ];
            return view('componente', compact('componentes'));
        }   
}
