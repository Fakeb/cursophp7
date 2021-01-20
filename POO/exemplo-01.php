<?php

class Pessoa {

    public $nome; //Atributo

    public function falar(){ //Método

        return "o meu nome é " . $this->nome;

    }

}

$rafael = new Pessoa();
$rafael->nome = "Rafael";
echo $rafael->falar();

?>