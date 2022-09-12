<div class="titulo">Switch</div>

<?php

$categoria = 'luxo';

$preco = 0.0;
$carro = '';

switch(strtolower($categoria)){
    case 'luxo':
        $preco = 500;
        $carro = 'BMW';
        break;
    case 'pobre':
        $preco = 200;
        $carro = 'GOl';
        break;
    default:
        $carro = 'Fenemé';
        $preco = 100;
}

echo "carro: $carro, preco: $preco";
