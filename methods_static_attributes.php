<?php
class Login{
    // Criando um atributo estatico
    public static $user;

    // Criando um metodo estatico
    public static function verficaLogin(){

        // para referenciar um atributo estatico, NÃO É UTILIZADO O $THIS
        echo "O usuario:" . self::$user . ", esta logado" . PHP_EOL;
    }

    public function sairSistema(){
        echo "O usuario deslogou";
    }

}


// Quando se utiliza atributos estaticos, n é necessario instancia a classe
Login::$user = "Admin";

// Quando se utiliza metodos estaticos, n é necessario instancia a classe
Login::verficaLogin();


?>