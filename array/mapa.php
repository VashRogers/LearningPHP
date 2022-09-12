<div class="titulo">Mapas Array</div>

<?php

$dados = array("idade" => 25, "cor" => 'verde', "peso" => 50.50);

print_r($dados);

echo '<br>' . $dados["cor"];

echo '<hr>';

$dados[] = 13;

echo $dados[0];
