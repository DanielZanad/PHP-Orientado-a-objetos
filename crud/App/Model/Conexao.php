<?php 
// Definindo namespace
namespace App\Model;

// Utilizando PDO
use PDO;

// Criando a classe que vai ser responsavel por fazer a conexao com banco de dados
class Conexao{
    private static $instance;

    // O metodo getConn vai verificar se existe uma instancia da conexao, se exsitir ele retorna a instancia
    // que vai ser o atributo $instance e se nao tiver ele cria uma
    public static function getConn(){
        // Se nao existir a instancia
        if(!isset(self::$instance)){
            // Criando uma instancia nova   
            self::$instance = new PDO('mysql:host=AondeEstaHospedado;dbname=nomeDoDataBase;charset=utf8','usuario','senha');
        }
        // Retornando a instancia
        return self::$instance;
        
    }
}
?>