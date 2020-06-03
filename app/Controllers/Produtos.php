<?php namespace App\Controllers;

class Produtos extends BaseController {
    public function index(){
        echo "<h1>Página principal de produtos</h1>";
    }

    public function detalhes($produto_id){
        echo "<h1>Exibindo detalhes do produto $produto_id</h1>";
    }
}