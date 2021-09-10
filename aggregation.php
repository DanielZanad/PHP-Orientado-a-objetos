<?php
// Agrecacao,
// Na agregacao, uma classe precisa da outra para executar sua acao, 
// ou seja, uma classe utiliza a outra como parte de si propria


class Produto{
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    // Criar um metodo que vai receber somente uma instancia da classe `Produto`
    public function adiciona(Produto $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach($this->produtos as $produto){
            echo $produto->nome . PHP_EOL;
            echo $produto->valor . PHP_EOL;
        }
    }
}


$produto1 = new Produto("Notebook", 1500);
$produto2 = new Produto("Mouse", 50);

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->exibe();

?>