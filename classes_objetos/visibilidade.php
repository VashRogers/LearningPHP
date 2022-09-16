<div class="titulo">Visibilidade</div>

<?php

class A {
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA () {
        // $this->naoMostrar();
        echo "Class a) Publico = {$this->publico}<br>";
        echo "Class b) Protegido = {$this->protegido}<br>";
        echo "Class c) Privado = {$this->privado}<br>";
    } 

    protected function vaiPorHeranca () {
        echo "metodo veio por heranca <br>";
    }

    private function naoMostrar () {
        echo 'Não vou Imprimir';
    }

    
}

$a = new A;

$a->mostrarA();

// $a->naoMostrar();

echo "<hr>";

class B extends A {

    public function mostrarB () {
        echo "Class B) Publico = {$this->publico} <br>";
        echo "Class B) Protegido = {$this->protegido} <br>";
        echo "Class B) Privado = {$this->privado} <br>";
        parent::vaiPorHeranca();
    }

}

$b = new B;
$b->mostrarB();

// $b->naoMostrar();

echo 'Fin';