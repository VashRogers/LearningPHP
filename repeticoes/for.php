<div class="titulo">Laço FOR</div>

<?php

for($cont = 1; $cont <= 5; $cont++){
    echo "$cont <br>";
}

echo '<hr>';

for(; $cont <=10; $cont++){
    echo "$cont <br>";
}

$array = ['segunda', 'terça', 'sábado', 'domingo'];

print_r($array);
echo '<hr>';

for($i = 0; $i < count($array); $i++) {
    echo "{$array[$i]} <br>";
}

echo "<br>";

$matriz = [
    ['a', 'b', 'c', 'd'],
    ['x', 'y', 'z']
];

for($i=0; $i < count($matriz); $i++){
    for($j = 0; $j < count($matriz[$i]); $j++){
        echo "{$matriz[$i][$j]}";
    }
    echo '<br>';
}