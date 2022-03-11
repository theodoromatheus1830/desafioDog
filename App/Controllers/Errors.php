<?php

namespace App\Controllers;

class Errors
{
    public function error($data){
        echo "<h1>Error: ". $data['errcode'] ."</h1>"; // O Ideal seria a criacao de uma view para exibicao dos erros, mas por falta de tempo vou manter dessa forma
    }
}