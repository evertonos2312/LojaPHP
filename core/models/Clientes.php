<?php

namespace core\models;
use core\classes\Database;
use core\classes\Store;

class Clientes{

    public function getEmail($email){
        $bd = new Database();
        $parametros = [
            ':e' => strtolower(trim($email))
        ];
        $resultados = $bd->select("
        SELECT email from clientes WHERE email = :e", $parametros);

        if(count($resultados) != 0){
            return true;
        } else {
            return false;
        }
    }

    public function saveCliente(){
        $bd = new Database();
        $purl = Store::criarHash();

        $parametros = [
            ':email' => strtolower(trim($_POST['email'])),
            ':senha' => password_hash(trim($_POST['senha_1']), PASSWORD_DEFAULT),
            ':nome_completo' => trim($_POST['nome_completo']),
            ':endereco' => trim($_POST['endereco']),
            ':cidade' => trim($_POST['cidade']),
            ':estado' => trim($_POST['estado']),
            ':celular' => trim($_POST['celular']),
            ':purl' => $purl,
            ':ativo' => 0,
        ];
        $bd->insert("
        INSERT INTO clientes VALUES(
            0,
            :email,
            :senha,
            :nome_completo,
            :endereco,
            :cidade,
            :estado,
            :celular,
            :purl,
            :ativo,
            NOW(),
            NOW(),
            NULL
            )
        ", $parametros);
        
        return $purl;
    }

}