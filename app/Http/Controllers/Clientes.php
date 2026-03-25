<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes extends Controller
{
 
    function listar(){
        $clientes = [
            "cliente1" => ["id"=>1, "nome"=>"Knuckles The Echidna"],
            "cliente2" => ["id"=>2, "nome"=>"Sonic The Hedgehog"],
            "cliente3" => ["id"=>3, "nome"=>"Miles 'Tails' Prower"],
            "cliente4" => ["id"=>4, "nome"=>"Amy Rose"],
            "cliente5" => ["id"=>5, "nome"=>"Shadow The Hedgehog"],
            "cliente6" => ["id"=>6, "nome"=>"Dr. Eggman"],
            "cliente7" => ["id"=>7, "nome"=>"Rouge The Bat"],
            "cliente8" => ["id"=>8, "nome"=>"Silver The Hedgehog"],
            "cliente9" => ["id"=>9, "nome"=>"Blaze The Cat"],
            "cliente10" => ["id"=>10, "nome"=>"Cream The Rabbit"],
            "cliente11" => ["id"=>11, "nome"=>"Big The Cat"],
            "cliente12" => ["id"=>12, "nome"=>"Espio The Chameleon"],
            "cliente13" => ["id"=>13, "nome"=>"Vector The Crocodile"],
            "cliente14" => ["id"=>14, "nome"=>"Charmy Bee"],
            "cliente15" => ["id"=>15, "nome"=>"Metal Sonic"],
            "cliente16" => ["id"=>16, "nome"=>"Omega"],
            "cliente17" => ["id"=>17, "nome"=>"Jet The Hawk"],
            "cliente18" => ["id"=>18, "nome"=>"Wave The Swallow"],
            "cliente19" => ["id"=>19, "nome"=>"Storm The Albatross"],
            "cliente20" => ["id"=>20, "nome"=>"Chaos"]
        ];
    
        return view('clientes', ["cliente" => $clientes]);
    }

    }




