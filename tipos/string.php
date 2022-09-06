<div class="titulo">Tipo String</div>

<?php

echo 'This is a string';
echo '<br>';
var_dump('Isso e uma stringue');//Tem problemas pra buscar o lenght quando tem caracter especial.(Lembra dos problemas de encode do webservice? kkkkk)
echo '<br>';

// concatenando strings

echo 'Maycon' . ' Antonio'; // concatena - se strings usando (" . ")
echo '<br>';
echo 'Teste'. '"Teste"'. " 'Teste'";
echo "<br>";
print('Também existe a função print');

//funções strings:

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('sobe o primeiro caracter de cada palavra');
echo '<br>' . strlen('quantas letras?');
echo '<br>' . mb_strlen('Eu também', 'utf-8');
echo '<br>' . substr('Una parte da stringue', 7);