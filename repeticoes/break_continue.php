<div class="titulo">Break/Continue</div>

<?php

$cont = 16;

for(;;){
    echo "$cont <br>";
    $cont++;
    if($cont > 20){
        break;
    }
}

echo '<hr>';

for(;;){
    $cont++;
    if($cont % 2 === 1){
        continue;
    }
    echo "$cont <br>";
    if($cont >= 30){
        break;
    }
}

echo 'The End!';