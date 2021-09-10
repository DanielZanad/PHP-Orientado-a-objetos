<?php

// Criando uma `interface` que vai ser um modelo usado por outras classes
interface Crud{
    // Declarar metodos que deveram ser implementados pelas classes que estiverem usando essa `interface`
    public function create();
    public function read();
    public function update();
    public function delete();
}

// Implementando a `interface` na classe noticias
// Essa classe agora devera ter o metodos da `interface` Crud,
// Ou seja a classe faz um `contrato` para implementar os metodos
class Noticias implements Crud{
    public function create(){
        // Logica para cria uma noticia
    }

    public function read(){
        // Logica para ler uma noticia
    }

    public function update(){
        // Logica para atualizar uma noticia
    }

    public function delete(){
        // Logica para deletar uma noticia
    }
}

?>