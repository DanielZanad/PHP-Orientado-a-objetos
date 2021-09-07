<?php

class Pessoa{
    // Atributos
    public $nome;
    public $idade;


    // Metodos
    public function Falar(){
        echo $this->nome . " de: " . $this->idade . "acabou de falar" . PHP_EOL;
    }
}

// Instanciar uma classe
$pessoa = new Pessoa();

// Chamar o metodo que esta no objeto "$pessoa"
$pessoa->Falar();

// Para acessar o atributo que esta dentro do objeto
$pessoa->nome = "Zanad";
$pessoa->idade = 18;

// Mostrando o que esta dentro do atributo nome
echo $pessoa->nome . PHP_EOL;


var_dump($pessoa);