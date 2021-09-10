<?php

class Animal{

    public function Andar(){
        echo "Andou" . PHP_EOL;
    }

    public function Correr(){
        echo "O animal correu!" . PHP_EOL;
    }

}

class Cavalo extends Animal{
    // Polimorfismo é reescrever uma função que vem da classe mãe
    public function Andar(){
        // Quando estiver reescrevendo uma função é livre para fazer o que quiser
        // Como chamar outro metodo herdado
        $this->Correr();
    }

}


$animal = new Cavalo();
$animal->Andar();


?>