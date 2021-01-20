<?php 

class Pessoa {

    public $nome = "Rasmus Lerdorf"; // public para uso fora da classe
    protected $idade = 48; // protegido para uso fora da classe, mas possibilitando o uso no caso de uma herança
    private $senha = "123456"; // protegido para uso fora da classe

    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

    
}


//$objeto = new Pessoa();
$objeto = new Programador();

//echo $objeto->nome . "<br/>";

$objeto->verDados();

?>