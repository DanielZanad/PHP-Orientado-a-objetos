<?php

// Criando classe abstrata
abstract class Banco {
    protected $saldo;
    protected $liiteSaque;
    protected $juros;


    // Criar metodo abstratos para 'Obrigar' as classes que estendem a ter esse metodos
    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco{
    // Colocando os metodos abstratos
    public function Sacar($s){
        $this->saldo -= $s;
        echo PHP_EOL . "Sacou: {$s}" . PHP_EOL;
    }
    // Colocando os metodos abstratos
    public function Depositar($d){
        $this->saldo += $d;
        echo PHP_EOL . "Depositou: {$d}";
    }


    // A classes que herdam de uma classe abstrata tambem podem ter seus proprios metodos
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(): float{
        return $this->saldo;
    }

}


class Bradesco extends Banco{
    // Colocando os metodos abstratos
    public function Sacar($s){
        $this->saldo -= $s;
        echo PHP_EOL . "Sacou: {$s}";
    }
    // Colocando os metodos abstratos
    public function Depositar($d){
        $this->saldo += $d;
        echo PHP_EOL . "Depositou: {$d}";
    }
}

// Não é possivel instancia uma classe abstrata
# $banco = new Banco();

$itau = new Itau();
$itau->setSaldo(1000);
echo PHP_EOL . "Saldo: {$itau->getSaldo()}" . PHP_EOL;
$itau->Sacar(250);
echo PHP_EOL . "Saldo: {$itau->getSaldo()}" . PHP_EOL;
$itau->Depositar(900);
echo PHP_EOL . "Saldo: {$itau->getSaldo()}" . PHP_EOL;



?>