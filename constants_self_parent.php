<?php
class Pessoa{
    // Criando constante
    const nome = "Daniel";

    public function exibirNome(){
        // Referenciando a constante
        // e monstrando o conteudo da constante com self::Nome_da_constante
        echo self::nome;
    }

}


class Daniel extends Pessoa{
    const nome = "Oliveira";
    public function exibirNome(){
        // Referenciando a constante
        // e monstrando o conteudo da constante com self::Nome_da_constante

        // Aqui vai mostrar "Oliveira", pois o self esta se referindo a constante do escopo da classe
        // se for retirado const nome = "Oliveira";, ele vai pegar valor da classe "Mãe"
        # echo self::nome;

        // para referenciar a constante da classe "Mãe" é necessario utilizar o `parent`
        echo parent::nome;

        
    }
}

$daniel = new Daniel();
$daniel->exibirNome();