<?php


namespace Banco\Modelo\Funcionario;


class Diretor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }
}