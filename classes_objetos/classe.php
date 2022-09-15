<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
    //atributos
    public $nome = 'Anônimo';
    public $idade = 18;


    public function apresentar() {
        return "Nome:  {$this->nome} Idade: {$this->idade}";
    }
}

$c1 = new Cliente();
$c1->nome = 'Maycon';
$c1->idade = 20;
echo $c1->apresentar(), '<br>';

echo $c1->nome, '<br>';

$c2 = new Cliente();
$c2->idade = 15;
$c2->nome = "Fernandez";
echo $c2->apresentar(), '<br>';
