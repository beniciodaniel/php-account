<?php


namespace Banco\Modelo\Funcionario;


use Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha) : bool
    {
        return $senha === 'teste1234';
    }
}