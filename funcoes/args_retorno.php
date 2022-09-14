<div class="titulo">Argumentos e retorno</div>

<?php

function obterMensagem(){
    return 'Maycon Antonio Bispo da Silva';
}

$msg = obterMensagem();

echo $msg;

echo "<hr>";

$var = 'Rodriguezz';

function completeMsg($nome){
    return "Bem vindo $nome";
}

echo completeMsg($var);