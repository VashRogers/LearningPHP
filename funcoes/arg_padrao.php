<div class="titulo">Argumento Padrão</div>

<?php


function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    echo "Bem Vindo, $nome $sobrenome";
}

saudacao();
echo "<br>";
saudacao(NULL);

echo "<br>";

function anotarPedido($comida, $bebida = 'Agua'){
    echo "Para comer: $comida <br>";
    echo "Para bebe: $bebida <br>";
}

anotarPedido("Hamburguer");
anotarPedido("Carne", "coca");