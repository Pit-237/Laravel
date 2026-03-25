<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
 
    function listar(){
        $produtos = [
            "produto1" => ["id"=>1, "nome"=>"computador", "preco"=>2500],
            "produto2" => ["id"=>2, "nome"=>"teclado", "preco"=>150],
            "produto3" => ["id"=>3, "nome"=>"mouse", "preco"=>80],
            "produto4" => ["id"=>4, "nome"=>"monitor", "preco"=>900],
            "produto5" => ["id"=>5, "nome"=>"impressora", "preco"=>600],
            "produto6" => ["id"=>6, "nome"=>"cadeira gamer", "preco"=>1200],
            "produto7" => ["id"=>7, "nome"=>"mesa de escritório", "preco"=>700],
            "produto8" => ["id"=>8, "nome"=>"notebook", "preco"=>3500],
            "produto9" => ["id"=>9, "nome"=>"tablet", "preco"=>1800],
            "produto10" => ["id"=>10, "nome"=>"smartphone", "preco"=>2200],
            "produto11" => ["id"=>11, "nome"=>"fone de ouvido", "preco"=>200],
            "produto12" => ["id"=>12, "nome"=>"caixa de som", "preco"=>300],
            "produto13" => ["id"=>13, "nome"=>"webcam", "preco"=>250],
            "produto14" => ["id"=>14, "nome"=>"microfone", "preco"=>400],
            "produto15" => ["id"=>15, "nome"=>"HD externo", "preco"=>500],
            "produto16" => ["id"=>16, "nome"=>"pen drive", "preco"=>50],
            "produto17" => ["id"=>17, "nome"=>"roteador", "preco"=>350],
            "produto18" => ["id"=>18, "nome"=>"controle de videogame", "preco"=>280],
            "produto19" => ["id"=>19, "nome"=>"jogo Sonic the Hedgehog", "preco"=>150],
            "produto20" => ["id"=>20, "nome"=>"camiseta Sonic", "preco"=>90],
            "produto21" => ["id"=>21, "nome"=>"carregador portátil", "preco"=>180]
        ];

        return view('estoque', ["produtos"=> $produtos]);

    }

}


