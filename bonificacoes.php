<?php

use Banco\Service\ControladorDeBonificacoes;
use Banco\Modelo\{Funcionario, Cpf};

require_once 'autoload.php';

$randomFuncionario = new Funcionario(
    "Shiryu",
    new Cpf("123.456.789-10"),
    "Desenvolvedor",
    1000);

$randomFuncionaria = new Funcionario(
    "Ayanami Rei",
    new Cpf("123.456.789-10"),
    "Piloto",
    3000);

echo $randomFuncionario->calculaBonificacao() . PHP_EOL;

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacoesDe($randomFuncionario);
$controlador->adicionaBonificacoesDe($randomFuncionaria);

echo $controlador->recuperaTotal();