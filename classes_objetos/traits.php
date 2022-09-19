<div class="titulo">Traits</div>

<?php



trait validacao {
    public $a = 'Valor A';
    public $b = 'Valor B';
    public function validaString ($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class Usuario{
    use validacao, validacaoMelhor;


}

$user = new Usuario();
var_dump($user->validaString(' '));
echo '<br>';
var_dump($user->validarStringMelhor('  '));
echo '<br>';
echo "Acessing A value: {$user->a}, <br> Acessing B value {$user->b}";
