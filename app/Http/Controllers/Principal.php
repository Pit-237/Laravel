<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    function somar(int $p1, int $p2){
        // echo "a soma entre $p1 + $p2 é: " . ($p1+$p2);
        return view('dividir', ["p1" => $p1, "p2"=> $p2]);
    }
    
    

}


