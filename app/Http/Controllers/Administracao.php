<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administracao extends Controller
{
    function index(){
        return view('pagina-adimistracao');
    }

    
}
