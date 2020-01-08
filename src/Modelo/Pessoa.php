<?php


namespace Alura\Banco\Modelo;


class Pessoa
{
    protected $nome;
    protected $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome() : string
    {
        return $this->nome;
    }

    public function recuperaCpf() : string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 3)
        {
            echo "O nome do titular deve possuir pelo menos 5 caracteres";
            exit();
        }
    }

}