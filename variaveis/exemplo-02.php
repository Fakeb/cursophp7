<?php

$anoNascimento = 1990;

$nomeCompleto = "";

$nome1= "rafa";
//$1nome="";

$sobrenome = "trab";

$nomeCompleto = $nome1 . " " . $sobrenome; // concatenar

echo $nomeCompleto;

exit; // termina o programa

echo $nome1; // printar a variavel

echo "<br/>"; // quebrar linha

//unset($nome1); // limpar a variavel

if (isset($nome1)){ // verificar se existe

    echo $nome1;

}






?>