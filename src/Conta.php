<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;


    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }


    public function saca(float $valorASacar) : void
    {
        if ($valorASacar > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }


    public function deposita(float $valorADepositar) : void
    {
        if ($valorADepositar <= 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }


    public function transfere(float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível!";
            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
    }


    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }


    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }


    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }


    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }


    public function recuperaSaldo() : float
    {
        return $this->saldo;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5)
        {
            echo "O nome do titular deve possuir pelo menos 5 caracteres";
            exit();
        }
    }
}