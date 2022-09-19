<div class="titulo">Métodos Mágicos</div>

<?php


class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo 'Construtor é invocado!<br>';
        $this->nome =  $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo "Destruct exectuing";

    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar() {
        echo $this . '<br>';
    }

    public function __get($atrib)
    {
        echo "Lendo atributo não declarado: {$atrib} <br>";

    }

    public function __set($atrib, $value)
    {
        echo "Alterando atributo não declarado: {$atrib}/{$value} <br>";

    }

    public function __call($name, $arguments)
    {
        echo "Tentando executar método: {$name}";
        echo "<br> com os parametros: ";
        print_r($arguments);
    }
}

$pessoa = new Pessoa('Ricardo Morais', 20);
$pessoa->apresentar();

echo "<hr>";
echo $pessoa->nome;
echo '<hr>';

$pessoa->nomeCompleto = 'Mucho Legal!!';

$pessoa->exec();