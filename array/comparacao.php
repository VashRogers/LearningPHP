<div class="titulo">Comparação Arrays</div>

<?php

$arr1 = ['nome' => 'Maria', 'idade' => 22];
$arr2 = ['nome' => 'Maria', 'idade' => 22];

var_dump($arr1 === $arr2);

$arr3 = [ 'idade' => 22, 'nome' => 'Maria' ];

echo '<br>';

var_dump($arr3 == $arr2);//ordem influencia nessa comparação, se for === dará false
