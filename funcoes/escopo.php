<div class="titulo">Função Escopo</div>

<?php

function imprimirMensagens(){
    echo "Hello World!";
    echo "<hr>";
}

imprimirMensagens();
imprimirMensagens();

$var = 1;

function changeValue(){
    $var = 2;
    echo "During the function: $var <br>";
}

echo "Variavel Antes: $var";
changeValue();
echo "Depois: $var";

function trocaValorDeVerdad(){
    global $var;
    $var = 3;
    echo "Durante a função: $var <br>";
}

echo "Variavel antes: $var <br>";
trocaValorDeVerdad();
echo "Depois: $var <br>";

echo "<hr>";
var_dump(trocaValorDeVerdad());

