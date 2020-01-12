<?php


namespace Banco\Service;


use Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha) : void
    {
        if ($diretor->podeAutenticar($senha)) {
            echo "Usuário logado no sistema.";
        } else {
            echo "Senha incorreta.";
        }
    }
}