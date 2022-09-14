<div class="titulo">Funções Anônimas</div>

<?php

$soma = function ($a, $b) { // equivalente a função anonima do JS(let variavelQualquer = () => {})
    return $a + $b;
};


echo $soma(1,2) . '<br>';

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);