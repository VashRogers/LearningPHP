<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9);//primeira maneira de definir constantes, recomenda se usar esta maneira

echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;//segunda maneira de definir constantes.

echo "<br> Nova taxa: " . NOVA_TAXA;

echo '<br>' . PHP_VERSION;


