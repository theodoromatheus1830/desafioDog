<?php

namespace App\Controllers;

use League\Plates\Engine;
use GuzzleHttp\Client;

class Dog
{
    private $view;

    public function __construct(){
        $this->view = Engine::create( __DIR__."/../../public/views" , "php");
    }

    public function index(){
        echo $this->view->render("dog",
        [
            "breeds" => $this->getAllBreeds()
        ]
        );
    }

    public function getAllBreeds(){
        $client = new Client();

        $response = $client->request('GET', 'https://dog.ceo/api/breeds/list/all');

        if($response->getStatusCode() === 200){
            return json_decode($response->getBody())->message;
        }

        return [];
    }
}