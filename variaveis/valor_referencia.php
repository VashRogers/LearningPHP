<div class="titulo">Valor x Referência</div>

<?php

// Atribuição por valor:
$var = 'valor inicial';

echo $var;

$varValor = $var;
echo "<br> $varValor";

$varValor = 'valor diferente';
echo "<br> $varValor";

// Atribuição por Referência:

$varRef = &$var;

$varRef = 'Same Reference';

echo "<br> var recebe agora por referencia: $var";