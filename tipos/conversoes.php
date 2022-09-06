<div class="titulo">Conversões PHP</div>

<?php

echo is_int(PHP_INT_MAX);

//int pra float

echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

//float pra int

echo '<p> float pra int</p>';
echo '<br>';
var_dump((int) 1.6);
echo '<br>';
var_dump(intval(2.8, 10));
echo '<br>';
var_dump(intval(2.9999));
echo '<br>';


//operações com stringue:

echo '<p>Strings: </p>';
echo '<br>';
var_dump(3 + '2');
echo '<br>';
var_dump('3' + 2);
echo '<br>';
var_dump('3'. 2);
echo '<br>';
var_dump(1 + '5 cinco');
echo '<br>';

