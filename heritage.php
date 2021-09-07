<?php
/** Heranca e um recurso que permite que classes compartilhem atributos e metodos,
 * afium de reaproveitar codigos ou comportamentos generalizados
 */


// Criando a classe "Mae" ou "Generica"  
class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andando\n";
    }

    public function Parar(){
        echo "Parando\n";
    }

}


// A classe Carro agora possui os metodos e atributos da classe Veiculo
class Carro extends Veiculo{

    // Uma funcao espedifica somente pertencente a classe Carro
    public function ligarLimpador(){
        echo "Limpando...";
    }
}

// A classe Moto agora possui os metodos e atributos da classe Veiculo
class Moto extends Veiculo{
    
    // Criando a funcao somente pertencente a classe Moto
    public function darGrau(){
        echo "Pega nois caralho";
    }

}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
var_dump($carro);

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2012;
$moto->Parar();
var_dump($moto);



?>