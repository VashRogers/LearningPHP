<div class="titulo">Operadores Relacionais</div>


<?php


var_dump(1 == 1);
echo "<br>";
var_dump(1 > 1);
echo "<br>";
var_dump(1 <> 1);

echo "<br>";
echo "<br>";

var_dump(1 == '1');
var_dump(1 === '1');
var_dump(1 != '1');
var_dump(1 !== '1');

echo '<hr>';

echo "Spaceship: <br>";

var_dump(5 <=> 3);
var_dump(5 <=> 5);
var_dump(3 <=> 5);

echo '<hr>';

echo pi();

$pi = 3.14;

if($pi == pi()){
    echo '<br>' . 'deu certo';
}
else{
    echo 'deu n';
}
