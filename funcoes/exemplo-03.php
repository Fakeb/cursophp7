<?php

function ola($texto, $periodo = "bom dia"){

    return "ola $texto! $periodo!<br>";

}

echo ola("mundo");
echo ola("","boa noite");
echo ola("pessoal","boa tarde");


?>