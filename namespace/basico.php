<?php namespace contexto; ?>
<div class="titulo">Exemplo Básico</div>


<?php

echo __NAMESPACE__ . '<br>';
const contante1 = 123;
define('contexto\constante2', 1234);
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constrante4', 456);

// echo constante1;
echo constante2 . '<br>';
echo contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
