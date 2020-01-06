<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;


    public function __construct(string $cpfTitular, string $nomeTitular, float $saldo)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldo;
    }


    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo){
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorASacar;
        }
    }


    public function depositar(float $valorADepositar) : void
    {
        if ($valorADepositar > 0) {
            $this->saldo += $valorADepositar;
        } else {
            echo "Valor precisa ser positivo";
        }
    }
}