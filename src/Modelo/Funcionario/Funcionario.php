<?php


namespace Banco\Modelo\Funcionario;


use Banco\Modelo\Cpf;
use Banco\Modelo\Pessoa;

abstract  class Funcionario extends Pessoa
{
    private $cargo;
    private $salario;

    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome) : void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento)
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    public function recuperaSalario() : float
    {
        return $this->salario;
    }

    public function calculaBonificacao() : float
    {
        return $this->salario * 0.1;
    }
}