<?php 
// Definindo namespace
namespace App\Model;

class Produto{
    // Criando atributos 
    private $id, $nome, $descricao;

    // Criando metoodos get e set
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function setId($id){
        $this->id = $id;
    }


    public function getNome(): string{
        return $this->nome;
    }

    public function getDescricao(): string{
        return $this->descricao;
    }

    public function getId(): int{
        return $this->id;
    }
}

?>
