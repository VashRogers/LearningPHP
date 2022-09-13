<div class="titulo">foreach</div>

<?php

$array = [1 =>'segunda', 'terça', 'sábado', 'domingo'];

foreach($array as $valor){
    echo "$valor <br>";
}

echo '<hr>';

foreach($array as $index => $valor){
    echo "$index => $valor <br>";
}

echo '<hr>';

$matriz = [
    ['a', 'b', 'c', 'd'],
    ['x', 'y', 'z']
];

foreach($matriz as $row){
    foreach($row as $col){
        echo $col;
    }
    echo '<br>';
}