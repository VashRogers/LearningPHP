<div class="titulo">Arrays Constantes</div>

<?php

const FRUTAS = ['laranja', 'abacate'];
// FRUTAS[0] = 'Potato'; Não permitido
echo FRUTAS[0];

const CARROS = ['FIAT' => 'Elba', 'FORD' => 'Ka'];
echo '<br>' . CARROS['FIAT'];
