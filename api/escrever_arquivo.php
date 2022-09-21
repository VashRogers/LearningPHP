<div class="titulo">Escrever Arquivo</div>

<?php

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Initial Value \n");
$str = "Segunda Linha \n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "New Content");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, '  Maycon Antonio Bispo da Silva');

