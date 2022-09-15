<div class="titulo">Desafio Data</div>

<?php

class Data {
    public $dia = '01';
    public $mês = '01';
    public $ano = '1970';

    function showData () {
        return "A data é: {$this->dia}/{$this->mês}/{$this->ano}";
    }
}

$data1 = new Data;

$data1->dia = '15';
$data1->mês = '03';
$data1->ano = '2002';


echo "A data descrita é: {$data1->showData()}<br>";

$dataNaoIniciada = new Data;

echo "Data não alterada = {$dataNaoIniciada->showData()}<br>";