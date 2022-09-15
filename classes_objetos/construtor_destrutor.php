<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){//equivalente ao método __init__ em python(mais ou menos rsrs)
        echo 'Entramos no construtor :D  ' . '<br>';
        $this->nome = $novoNome;
        $this->idade = $idade;

    }

    function __destruct() {
        echo 'Objeto faleceu XD';
    }

    public function apresentar () {//Equivalente ao método __str__ em python
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

$pessoa = new Pessoa('Maycon Antonio', 20);
$pessoa->apresentar();

$pessoa2 = new Pessoa('Rafael Bugado', 19);
$pessoa2->apresentar();

unset($pessoa);//chama o destrutor