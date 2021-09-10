<?php
// Ocorrencia anormal que afeta o funcionamento da aplicacao
// Exception e a classe base para todas Exceptions
// message, code, file, line

// Criando classe
class NewsLetter{
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            // Criando excecao
            throw new Exception("Este email é invalido", 1);
        }else{
            echo "Email cadastrado com sucesso";
        }
    }
}

// Instanciando o objeto
$newsletter = new NewsLetter();

// Usando try catch para tratar a excecao
try {
    $newsletter->cadastrarEmail("Contato@");
} catch (Exception $error) {
    echo "Mensagem: " . $error->getMessage() . PHP_EOL;
    echo "Codigo: " . $error->getCode() . PHP_EOL;
    echo "Linha: " . $error->getLine() . PHP_EOL;
    echo "Arquivo: " . $error->getFile() . PHP_EOL;
}


?>