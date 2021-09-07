<?php
class Login{
    // Colocando private faz com que o atributos da classe so sejam 
    // acessados dentro da classe
    private $email;
    private $senha;

    // Para isso vamos usar os Metodos Getter and Setter


    // Metodos Getters
    public function getEmail(): string{
        return $this->email;
    }

    public function getSenha(): string{
        return $this->senha;
    }



    // Metodos Setters
    public function setEmail($email){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" && $this->senha == "12345"){
            echo "Logado com sucesso \n";
        }else{
            echo "dados invalidos \n";
        }
    }

}

$logar = new Login("", "", "");
$logar->setEmail("teste@teste.com");
$logar->setSenha("12345");
echo "{$logar->getEmail()} e {$logar->getSenha()} \n";
$logar->Logar();