<div class="titulo">Operações com Array</div>

<?php

$dados1 = [
    "nome"=> 'José',
    "idade"=> 28
];

$dados2 = [
    "naturalidade" => 'Fortaleza'
];

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

// $dadosCompletos = false;
echo '<br>' . is_array($dadosCompletos);

echo '<hr>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';

unset($dadosCompletos['nome']);

print_r($dadosCompletos);

echo '<hr>';

$impares = [1, 3, 5, 7];
$pares = [0, 2, 4, 6];
// $decimais = $pares + $impares;
$decimais = array_merge($pares, $impares);

print_r($decimais);