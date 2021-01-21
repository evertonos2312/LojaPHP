<?php

use core\classes\Database;
use core\classes\Functions;

//Abrir a sessão


session_start();

//carregar o config
require_once('../config.php');

require_once('../vendor/autoload.php');

$a = new Database();
$b = new Functions();

$b->teste();

echo "OK";

/*
carregar o config 
carregar classes
carregar o sistema de rotas{
    mostrar loja
    mostrar carrinho
    mostrar admin, etc
}
   
*/