<?php
/**
 *      clone *
 *      construct *
 *      invoke - que é chamado quando se tenta utilizar um objeto como funcao
 *      tostring
 *      get
 *      set 
 * 
 *  */ 

class Pessoa{
    private $dados = array();


    // metodos __set, para poder acessar um atributo private
    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    // metodo __get, para poder retornar um atributo private
    public function __get($nome): string{
        return $this->dados[$nome];
    }

    public function __toString(){
        return "Tentei imprimir o objeto" . PHP_EOL;
    }

    public function __invoke(){
        return "objeto como funcao" . PHP_EOL;
    }

}

$pessoa = new Pessoa();
// com o __set na classe, é possivel fazer isso 
$pessoa->nome = "Jose";
$pessoa->idade = 50;
$pessoa->sexo = "M";
// com o __get na classe, é possivel faze isso
echo $pessoa->nome . PHP_EOL;
echo $pessoa->idade . PHP_EOL;
echo $pessoa->sexo . PHP_EOL;

// Se der um echo em $pessoa ele vai chamar a funcao __toString
echo $pessoa;

// Se tentar usar um objeto como funcao ele vai chamar a funcao __invoke 
echo $pessoa();





?>