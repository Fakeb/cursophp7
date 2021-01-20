<?php

function soma(int ...$valores){ // para pegar todos os parametros

    return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5,3.2); // vai ignorar a virgula
echo "<br>";


?>