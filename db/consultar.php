<div class="titulo">Consultar Registros</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php

require_once "conexao.php";


$sql = "SELECT id, nome, nascimento, email FROM cadastro";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row;
    }
}
else if($conexao->error){
    echo "Erro: " . $conexao->error;
}

// print_r($registros);

$conexao->close();

?>

<table class="table table-hover table-striped">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <th><?= $registro['id'] ?></th>
                <th><?= $registro['nome'] ?></th>
                <th>
                    <?= 
                        date('d/m/Y', strtotime($registro['nascimento'])) 
                    ?>
                </th>
                <th><?= $registro['email'] ?></th>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > *{
        font-size: 1.2em;
        font-weight: lighter;
    }
</style>