<?php

use Carro as GlobalCarro;

/**
 * 
 * Public - Fara com que nao haja ocultacao nenhuma, toda propriedade ou metodo declarado com public serao acessiveis por todos que quiserem acessa-los
 * 
 * Protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou metodos protegidos como se fossem publicos
 * 
 * Private - ao contrario do public, esse modificador faz com que qualquer metodo ou propriedade seja visivel so e somente pela classse que a declarou
 */

class Veiculo{
    // Atributos
    protected $modelo;
    private $cor;
    public $ano;

    // Metodos
    public function Andar(){
        echo "Andou" . PHP_EOL;
    }

    public function Para(){
        echo "Parou". PHP_EOL;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getCor(): string{
        return $this->cor;
    }

    
}


class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpando em 321..";
    }

    // Atraves de metodos em classes "filhas", é possivel acessar 
    // atributos protected na classe "Mae".
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(): string{
        return $this->modelo;
    }
}


class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando grau..";
    }
}


// Instanciando veiculo
$carro = new Carro();
$carro->setModelo("Gol");
echo $carro->getModelo(). PHP_EOL;

// Tentando colocar algo no atributo private, porem como esta como private
// Ele vai criar um atributo com mesmo nome na classe Carro e vai inserir nesse e nao no atributo da classe Veiculo 
$carro->setCor("Azul");
print_r($carro);

?>