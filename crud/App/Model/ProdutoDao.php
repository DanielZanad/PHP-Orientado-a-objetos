<?php

// Definindo namespace
namespace App\Model;

class ProdutoDao{
    public function create(Produto $produto){
        // Criando a query para INSERIR no banco de dados
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
        // Criando a query para LER dados no banco
        $sql = 'SELECT * FROM produtos';

        // Preparar a query 
        $stmt = Conexao::getConn()->prepare($sql);
        // Executando query
        $stmt->execute();

        // Verificando se retornou algo do banco
        if($stmt->rowCount()>0){
            // Criando um array com todos os registros
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }else{// Se nao encontrar nenhum dado no banco
            return [];
        }
    }

    public function update(Produto $produto){
        // Criando a query para ATUALIZAR os dados no banco
        $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';
    
        // Preparar a query
        $stmt = Conexao::getConn()->prepare($sql);
        // Associando oque vai ser atualizado no banco, com o objeto que foi passado no parametro
        $stmt->bindValue(1,$produto->getNome());
        $stmt->bindValue(2,$produto->getDescricao());
        $stmt->bindValue(3,$produto->getId());

        // Executando query
        $stmt->execute();
    }

    public function delete($id){
        // Criando a query para DELETAR os dados no banco
        $sql = 'DELETE FROM produtos WHERE id = ?';

        // Preparando a query
        $stmt = Conexao::getConn()->prepare($sql);
        // Associando oque vai ser deletado no banco, com o id que foi passado no parametro
        $stmt->bindValue(1, $id);
        // Execuntado a query
        $stmt->execute();
    }
}


?>