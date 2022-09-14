<div class="titulo">Map e Filter</div>

<?php

$notas = [5.8, 7.3, 9.4, 6.7];

$notasFinais1 = [];

$apenasAprovados1 = [];

foreach($notas as $nota){
    if($nota >= 7){
        $notasFinais1[] = ($nota);
    }
}

print_r($notasFinais1);

echo '<hr>';

$notasFinais2 = array_map(round, $notas);

print_r($notasFinais2);

echo '<hr>';

function aprovados($nota){
    return $nota >= 7;
}

$apenasOsAprovados2 = array_filter($notas, aprovados);

print_r($apenasOsAprovados2);

echo '<hr>';

function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

$notasFinais3 = array_map(calculoLegal, $notas);
print_r($notasFinais3);
