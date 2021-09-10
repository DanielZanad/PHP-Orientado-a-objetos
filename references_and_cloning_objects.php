<?php

// Referencia e Clonagem de objetos

class Pessoa {
    // Atributo
    public $idade;

    // usando o metodo __clone
    // Que vai ser inicializado quando utilizar a palavra `clone`
    public function __clone(){
        echo "Clonagem de objetos" . PHP_EOL;
    }

}

// Instanciando objeto
$pessoa = new Pessoa();
$pessoa->idade = 25;

// Criando um objeto chamado `pessoa2` que vai fazer referencia ao objeto `pessoa`
$pessoa2 = $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade . PHP_EOL;


// Clonando objeto
$pessoa3 = clone $pessoa;
$pessoa3->idade = 35;

echo $pessoa3->idade . PHP_EOL;




?>