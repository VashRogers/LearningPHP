<div class="titulo">Traits 02</div>

<?php

use validacao as GlobalValidacao;
use validacaoMelhor as GlobalValidacaoMelhor;

trait validacao {
    public function validarString ($str): bool
    {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString ($str){
        return isset($str) && trim($str);
    }
}

class PessoaUser {
    use validacao, validacaoMelhor{
        validacaoMelhor::validarString insteadOf validacao;
        // validacao::validarString insteadof validacaoMelhor;

        validacao::validarString as validacaoSimples;
    }
}

$pessoaUser = new PessoaUser();

var_dump($pessoaUser->validacaoSimples(' '));
echo "<br>";
var_dump($pessoaUser->validarString(' '));
