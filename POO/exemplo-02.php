<?php

class Carro{

    private $modelo; // atributo
    private $motor;
    private $ano;
    //pegar valor
    public function getModelo(){ // retorno da função é uma string

        return $this->modelo;

    }
    //mudar valor
    public function setModelo($modelo){//parâmetro 

        $this->modelo = $modelo; // o atributo recebe o valor do parâmetro 
        
    }

    public function getMotor():float{ // retorno da função é um float

        return $this->motor;

    }

    public function setMotor($motor){//parâmetro

        $this->motor = $motor; // o atributo recebe o valor do parâmetro 
        
    }

    public function getAno():int{ // retorno da função é um inteiro

        return $this->ano;

    }

    public function setAno($ano){//parâmetro

        $this->ano = $ano; // o atributo recebe o valor do parâmetro 
        
    }

    public function exibir(){

        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );

    }

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());


?>