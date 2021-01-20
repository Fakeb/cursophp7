<?php

$nome = "fake";

function teste() {

    global $nome;
    echo $nome;

}

function teste2(){

    $nome2 = "b";
    echo $nome. "teste2";
}


teste();

?>