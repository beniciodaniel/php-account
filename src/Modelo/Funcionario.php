<?php


namespace Banco\Modelo;


class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function editaNome(string $nome) : void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
}