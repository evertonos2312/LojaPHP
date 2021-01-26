<?php

$routes = [
    'home' => 'main@index',
    'loja' => 'main@loja',
];

$acao = 'home';

if(isset($_GET['a'])){
   if(!key_exists($_GET['a'], $routes)){
       $acao = 'home';
   } else {
       $acao = $_GET['a'];
   } 
}

// trata a definição da rota
$partes = explode('@',$routes[$acao]);
$controlador = 'core\\controladores\\'.ucfirst($partes[0]);
$metodo = $partes[1];

$ctr = new $controlador();
$ctr->$metodo();

 
