<?php

// Definindo namespace
namespace App\Model;

class ProdutoDao{
    public function create(Produto $produto){
        // Criando a query para inserir dados no banco
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES(?,?)';
        
        // Preparar a query
        $stmt = Conexao::getConn()->prepare($sql);
        // Associando oque vai ser inserido no banco, com o objeto que foi passado no parametro
        $stmt->bindValue(1,$produto->getNome());
        $stmt->bindValue(2,$produto->getDescricao());

        // Executando query
        $stmt->execute();

    }

    public function read(){

    }

    public function update(Produto $produto){

    }

    public function delete($id){

    }
}


?>