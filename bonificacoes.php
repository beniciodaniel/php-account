<?php

use Banco\Service\ControladorDeBonificacoes;
use Banco\Modelo\Cpf;
use Banco\Modelo\Funcionario\{Diretor, Funcionario, Gerente};

require_once 'autoload.php';

$randomFuncionario = new Funcionario(
    "Shiryu",
    new Cpf("123.456.789-10"),
    "Desenvolvedor",
    1000);

$randomFuncionaria = new Gerente(
    "Ayanami Rei",
    new Cpf("123.456.789-10"),
    "Piloto",
    3000);

$randomDiretor = new Diretor(
    "Ryu",
    new Cpf("123.666.789-10"),
    "Desenvolvedor Fullstack",
    5000);

echo $randomFuncionario->calculaBonificacao() . PHP_EOL;

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacoesDe($randomFuncionario);
$controlador->adicionaBonificacoesDe($randomFuncionaria);
$controlador->adicionaBonificacoesDe($randomDiretor);

echo $controlador->recuperaTotal();