<?php


class Titular
{
    private $cpf;
    private $nome;
    private $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }


    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }


    public function recuperaNome(): string
    {
        return $this->nome;
    }


    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5)
        {
            echo "O nome do titular deve possuir pelo menos 5 caracteres";
            exit();
        }
    }


    public function recuperaEndereco() : Endereco
    {
        return $this->endereco;
    }
}