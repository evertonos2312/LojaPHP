<?php

namespace core\controllers;

use core\classes\Database;
use core\classes\Store;
use core\models\Clientes;

class Main{

    public function index(){

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer',
        ],);
    }


    public function loja(){

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'loja',
            'layouts/footer',
            'layouts/html_footer',
        ],);
    }


    public function carrinho(){

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'carrinho',
            'layouts/footer',
            'layouts/html_footer',
        ],);
    }

    public function novo_cliente(){

        if(Store::clienteLogado()){
            $this->index();
            return;
        }

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'criar_cliente',
            'layouts/footer',
            'layouts/html_footer',
        ],);
    }

    public function criar_cliente(){
        if(Store::clienteLogado()){
            $this->index();
            return;
        }
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            $this->index();
            return;
        }
        
        if($_POST['senha_1'] !== $_POST['senha_2']){
            $_SESSION['erro'] = 'Senhas não conferem';

            $this->novo_cliente();
            return;
        }

       $cliente = new Clientes();

       if($cliente->getEmail($_POST['email'])){
            $_SESSION['erro'] = 'Já existe um cliente com este email';

            $this->novo_cliente();
            return;
       }
        $purl = $cliente->saveCliente();
        $link_purl = "http://localhost/?a=confirmar_email&purl=$purl";
        


        
    }
}