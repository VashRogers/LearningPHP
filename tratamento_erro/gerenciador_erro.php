<div class="titulo">Error Handler</div>

<?php

ini_set('display_errors', 1);

// echo 4/0 . '<br>';

// error_reporting(E_ERROR);
// echo 4/0 . '<br>';
// error_reporting(E_ALL);
// echo 4/0 . '<br>';

error_reporting(E_ALL);
echo 4/0 . '<br>';
include 'arquivo_inexistente.php';

function filtraMsg($errno, $errstring) {
    $text = 'include';
    // $text = 'by zero';

    return !!stripos(" $errstring", $text);
}

set_error_handler('filtraMsg', E_WARNING);

echo '<hr>';

echo 4/0 . '<br>';
include 'arquivo_inexistente.php';