<div class="titulo">Iclude Once</div>

<?php

ini_set('display_errors', 1);

include('include_once_arquivo.php');
// require('include_once_arquivo.php');

echo "Variavel = {$variavel}";

$variavel = 'Variável Alterada';

include('include_once_arquivo.php');
echo "Variavel = {$variavel}";

