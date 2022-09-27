<div class="titulo">Excluir Registro</div>

<?php

require_once "conexao.php";

$sql = "DELETE FROM cadastro WHERE id = 3";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if($resultado){
    echo "O banco deu certo";
}
else{
    echo "Deu erro: " . $conexao->error;
}

$conexao->close();