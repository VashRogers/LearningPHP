<div class="titulo">Tipo booleano</div>

<?php

echo true;
echo '<br>';
echo false;
echo '<br>';
var_dump(false);
echo '<br>';
var_dump(False);
echo '<br>' . is_bool('true') . 'Se não for bool quer dizer que não apareceu';
echo '<br>';
    if(is_bool(true)){
        echo 'é Booleano';
    }
    else{
        echo 'Não é Booleano';
    }

echo '<br>';
echo '<p>Regras de conversão</p>';//Regras de conversões de bool
echo '<br>' . var_dump((bool) 0);//apenas 0 é false
echo '<br>' . var_dump((bool) 1);
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) '');//false
echo '<br>' . var_dump((bool) 'Verdad');//true
echo '<br>' . var_dump((bool) '0');//false
echo '<br>' . var_dump(!!'false');//true





