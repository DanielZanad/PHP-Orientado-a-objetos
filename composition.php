<?php
/**
 *      Composicao
 *  Na composicao, uma calsse cria a instancia de outra classe dentro de si propria, sendo assim,
 *  quando ela for destruida, a outra classe tambem sera
 */


class Pessoa{
    public function atribuirNome($nome): string{
        return "O nome da pessoa é " . $nome . PHP_EOL;
    }
}

class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome){
        // Instanciando a classe `Pessoa` dentro da classe `Exibe`
        // e colocando no atributo $pessoa 
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(){

        // Acessando o metodo que esta dentro do objeto pessoa da classe `Exibe`
        echo $this->pessoa->atribuirNome($this->nome);
    }
}

$exibe = new Exibe("Jose");
$exibe->exibeNome();


?>