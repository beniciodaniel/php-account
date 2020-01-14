<?php


namespace Banco\Service;


class Autenticador
{
    public function tentaLogin(Autenticador $autenticavel, string $senha) : void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Usuário logado no sistema.";
        } else {
            echo "Senha incorreta.";
        }
    }
}