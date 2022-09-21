<div class="titulo">Ler Arquivo</div>

<?php

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
var_dump(fgets($arquivo) . '<br>');
echo '<br>';

fclose($arquivo);
