<div class="titulo">PDO: Inserir</div>

<?php

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro (
    nome, email, nascimento, site, filhos, salario
) VALUES ('Elidenilson Da Silva', 'erivelton@gmail.com', '2000-06-08', 'eriveltonweb.com.br', 10, 5060)";

$conexao = novaConexao();

if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
}
else{
    echo $conexao->errorCode() . '<br>';
    print_r($conexao->errorInfo());
}