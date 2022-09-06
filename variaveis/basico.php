<div class="titulo">Variáveis</div>

<?php

$numA = 13;

$numB = 1.55;

echo $numA, '<br>';
var_dump($numA);
echo '<br>';

echo $numB, '<br>';
var_dump($numB);

$soma = $numA + $numB;
echo '<br>';
var_dump($soma);
echo '<br>';
echo isset($soma);
echo '<br>';
unset($numA);
var_dump($numA);
echo '<br>';
echo($numA);
echo '<br>';
$varStr = 'Soy una Var String';
echo $varStr;
echo '<br>';
$varStr = 8;
echo 'Var str virou um número?!: ' . $varStr;

//Nomenclatura de variável:

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vãr5 = 'valida';//evitar acento
// $6var = 'invalida';
// $%var = 'invalida';