<div class="titulo">Inserir 1</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro (
    nome, 
    nascimento, 
    email, 
    site, 
    filhos, 
    salario
)
VALUES(
    'Doidao de acido',
    '1992-01-30',
    'rafsasaasenson@gmail.com',
    'https://acido.com.br',
    1,
    15000.500
)";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if($resultado){
    echo "O banco deu certo";
}
else{
    echo "Deu erro: " . $conexao->error;
}

$conexao->close();