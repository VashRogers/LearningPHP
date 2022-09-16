<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe';

    public function showA () {
        echo "Não estática = {$this->naoStatic}<br>";
        //Tentativa 1
        // echo "Estática = {$this->static}<br>";
        //Tentativa 2
        // echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";

    }

    public static function mostrarStaticA () {
        // echo "Não estático {$this->naoStatic}";
        // echo "Estática = {$static}";
        echo "Estática = " . self::$static . "<br>";
    }

}

// $objetoA = new A;
// $objetoA->showA();
// $objetoA->mostrarStaticA();
echo A::mostrarStaticA(), '<br>';
A::mostrarStaticA();