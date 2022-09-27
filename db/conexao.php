<?php

function novaConexao ($banco = 'curso_php') {
    $servidor = 'database';
    $usuario = 'root';
    $senha = 'genesis';
    
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error){
        die('Erro: ' . $conexao->connect_error);
    }

    return  $conexao;
}