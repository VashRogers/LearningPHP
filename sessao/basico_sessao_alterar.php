<?php

session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: <?= $_SESSION['nome'] ?></b>
</p>
<p>
    <b>Email: <?= $_SESSION['email'] ?></b>
</p>

<?php

$_SESSION['email'] = 'tonhaomail@gmail.com';

?>

<p>
    <a href='basico_sessao.php'>Go Back</a>
</p>

<hr>

<p>
    <a href='basico_sessao_limpar.php'>Limpar</a>
</p>