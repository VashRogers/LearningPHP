<div class="titulo">PDO: excluir</div>

<?php

require_once "conexao_pdo.php";

$sql = "DELETE from cadastro WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

if($stmt->execute([23])){
    echo "Foi apagado";
}else{
    echo "Error";
}