<?php
class Login{
    // Colocando private faz com que o atributos da classe so sejam 
    // acessados dentro da classe
    private $email;
    private $senha;
    private $nome;

    // Criando o construtor da classe
    public function __construct($email, $senha, $nome){

        // Usar os o metodo set para inserir o que vem do parametro do construtor nos atributos da classe 
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
    }



    // Para isso vamos usar os Metodos Getter and Setter

    // Metodos Getters
    public function getEmail(): string{
        return $this->email;
    }

    public function getSenha(): string{
        return $this->senha;
    }

    public function getNome(): string{
        return $this->nome;
    }


    // Metodos Setters
    public function setEmail($email){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }


    public function Logar(){
        if($this->email == "teste@teste.com" && $this->senha == "12345"){
            echo "Logado com sucesso \n";
        }else{
            echo "dados invalidos \n";
        }
    }

}

$logar = new Login("teste@teste.com", "12345", "Zanad");
echo "{$logar->getEmail()} e {$logar->getSenha()} \n";
$logar->Logar();