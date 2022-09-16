<div class="titulo">Classe Abstrata</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1(){
        echo "Exec metodo 1 <br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    
    public function metodo1(){
        echo "Exec metodo 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2 ($parametro) {
        echo "Executando método 2 com parametro = $parametro<br>";

    }

    public function metodo3 () {
        echo "Exec método 3 <br>";
        $this->metodo2('Interno');
    }

}

$c = new Concreta();
$c->metodo1();