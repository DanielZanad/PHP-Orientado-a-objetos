<?php
// Fazer o autoload da classes, com o padrao PSR-4
require_once 'vendor/autoload.php';

// Instanciando um objeto da classe Produto()
$produto = new \App\Model\Produto();
$produto->setNome('Notebook DELL');
$produto->setDescricao('i5, 8gb');

// Instanciando a classe onde esta a funcao para inserir os dados no banco
$produtoDao = new \App\Model\ProdutoDao();
// Chamando a funcao `create` dentro do objeto $produtoDao e passando as informacoes dentro do objeto `$produto` para ser inserido dentro do banco de dados
$produtoDao->create($produto);

?>