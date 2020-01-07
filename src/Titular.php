<?php
require_once 'src/Pessoa.php';

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco() : Endereco
    {
        return $this->endereco;
    }
}