<?php


namespace Banco\Modelo\Funcionario;


class Gerente extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }
}