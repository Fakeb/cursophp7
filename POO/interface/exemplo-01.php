<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarchar($marcha);
    
}

class Civic implements Veiculo {

    public function acelerar($velocidade){

        echo "o veículo acelerou até " . $velocidade . " km/h";

    }
    public function frenar($velocidade){

        echo "o veículo frenou até " . $velocidade . " km/h";

    }
    public function trocarMarchar($marcha){

        echo "o veículo engatou a marcha " . $marcha;

    }

}

$carro = new Civic();

$carro->trocarMarchar(1);


?>