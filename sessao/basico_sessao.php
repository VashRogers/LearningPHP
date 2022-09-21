<div class="titulo">Sessão</div>

<?php

session_start();


echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['email'] = 'normes@gmail.com';
    $_SESSION['nome'] = 'Maycon';
}


print_r($_SESSION);

?>

<p>
    <a href='/AmbienteLearnPhp/curso-php/sessao/basico_sessao_alterar.php'>Alterar Session</a>
</p>