<?php
//tipos basicos de variaveis

$nome = "rafa";
$site = 'fake.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
/////////////////////////////
//tipos composto de variavel

$frutas = array("abacaxi","laranja", "manga");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);
//////////////////////////////
//tipo especial de variavel
$arquivo = fopen("exemplo-03.php","r");

//var_dump($arquivo);

$nulo = null;

$vazio = "";

?>