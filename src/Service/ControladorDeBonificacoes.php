<?php


namespace Banco\Service;


use Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacoesDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal() : float
    {
        return $this->totalBonificacoes;
    }
}