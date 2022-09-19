<div class="titulo">Herança</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){
        $this->nome = $novoNome;
        $this->idade = $idade;

        echo "Objeto criado <br>";
    }

    function __destruct(){
        echo 'Adiê People!';
    }

    public function show(){
        echo "{$this->nome}, idade: {$this->idade} <br>";
    }
    

}

class User extends Pessoa {
    public $login;
    
    function __construct($nome, $idade, $login){
        // $this->nome = $nome;
        // $this->idade = $idade;
        $this->login = $login;
        parent::__construct($nome, $idade);
        echo 'User criado <br>';
    }

    function __destruct(){
        echo "User Destroyed <br>";
        parent::__destruct();
    }

    public function show() {
        echo "{$this->login}: ";
        parent::show();
    }
}

$usuario = new User('Maycon Antonio', 21, 'sadmayco_');
$usuario->show();
unset($usuario);

