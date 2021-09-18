<?php
// Fazer o autoload da classes, com o padrao PSR-4
require_once 'vendor/autoload.php';

// Instanciando um objeto da classe Produto()
$produto = new \App\Model\Produto();

// Colocando id para testar update
$produto->setId(2);
$produto->setNome('PS5');
$produto->setDescricao('Console da Sony');

// Instanciando a classe onde esta a funcao para inserir os dados no banco
$produtoDao = new \App\Model\ProdutoDao();
    // Chamando a funcao `create` dentro do objeto $produtoDao e passando as informacoes dentro do objeto       `$produto` para ser inserido dentro do banco de dados
    $produtoDao->create($produto);
  
    // Usando metodo `update` para atualizar os dados
    $produtoDao->update($produto);


    // Usando o metodo read para fazer um "GET" no dados
    $produtoDao->read();
    foreach($produtoDao->read() as $p){

        echo $p['nome'] . "<br>" . $p['descricao']."<hr>";
    }

    // Usando o metodo `delete` para apagar, usando o id como parametro
    $produtoDao->delete($produto->getId());


?>