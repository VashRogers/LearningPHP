<div class="titulo">Try/Catch</div>

<?php

try{
    echo intdiv(7, 0);
    
}catch(Error $e){
    echo "Ocorreu um erro por aqui <br>";

}

try{
    throw new Exception('Algo mutcho estraño ocorreu');
    echo intdiv(7, 0);
}catch(DivisionByZeroError $e){
    echo "Deu pau na division per Zero";
}catch(Throwable $e){
    echo 'Erro encontered: ' . $e->getMessage() . '<br>';
}finally{
    echo 'Sempre serei chamado';
}