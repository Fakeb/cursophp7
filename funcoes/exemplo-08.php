<?php

function soma(int ...$valores):string{ // para pegar todos os parametros

    return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5,3.2); // vai ignorar a virgula
echo "<br>";

?>