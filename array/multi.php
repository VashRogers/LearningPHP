<div class="titulo">Array Multidimensional</div>

<?php

$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Mariah",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ]
];

print_r($dados);
echo '<br>' . $dados[1]['naturalidade'];//São Paulo

echo '<br>';

$dados[] = [
    "nome" => "Carrey",
    "idade" => 29,
    "naturalidade" => "Naralandia"
];

echo $dados[2]['nome'];
$dados[2]['cantor'] = True;

echo '<br>';
print_r($dados[2]);