<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
    public $peso;

}

class Arroz extends Comida{

}

class Feijao extends Comida{

}

class Sorvete extends Comida{

}

class ArrozAgrega extends Arroz{

}

class Pessoa {
    public $peso;

    function __construct($peso)
    {
        $this->peso = $peso;

    }

    public function comer(Comida $comida) {
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();

$c1->peso = 0.65;

$c2 = new Feijao();

$c2->peso = 1.75;

$p = new Pessoa(83.45);

$p->comer($c1);
$p->comer($c2);

echo $p->peso;