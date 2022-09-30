<?php

function novaConexao($banco = 'curso_php') {
    $user = 'root';
    $senha = 'genesis';
    
    try{
        $database = "mysql:host=database:3306;dbname=$banco";
        $conexao = new PDO($database, $user, $senha);
        return $conexao;
    }catch(PDOException $e){
        die('Erro' . $e->getMessage());
    }
}

novaConexao();
