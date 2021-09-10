<?php
// Associacao
// Acontece quando um objeto "utiliza" outro, porem, sem que eles dependam um do outro

class Pedido{
    public $numero;
    public $cliente;
    
}

class Cliente{
    public $nome;
    public $endereco;
}


$cliente = new Cliente();
$cliente->nome = "Daniel Zanad";
$cliente->endereco = "Rua xxxx, Numero: 666";


$pedido = new Pedido();
$pedido->numero = "123";
// Fazendo uma associacao com o objeto $cliente, colocando como valor
// do atributo cliente dentro da classe `pedido`
$pedido->cliente = $cliente;


$dados = [
    'numero' => $pedido->numero,

    // Pegando um atributo dentro da objeto `cliente` que esta dentro do 
    // atributo dentro do objeto `pedido`
    'nome' => $pedido->cliente->nome,
    'endereco' => $pedido->cliente->endereco
];

print_r($dados);

?>