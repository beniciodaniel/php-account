<?php

use Banco\Service\ControladorDeBonificacoes;
use Banco\Modelo\Cpf;
use Banco\Modelo\Funcionario\{Diretor, EditorDeVideo, Gerente, Desenvolvedor};

require_once 'autoload.php';

$randomFuncionario = new Desenvolvedor(
    "Shiryu",
    new Cpf("123.456.789-10"),
    1000);

$randomFuncionaria = new Gerente(
    "Ayanami Rei",
    new Cpf("123.456.789-10"),
    3000);

$randomDiretor = new Diretor(
    "Ryu",
    new Cpf("123.666.789-10"),
    5000);

$umEditorVideo = new EditorDeVideo(
    "James",
    new Cpf("111.111.111-20"),
    1500);

echo $randomFuncionario->calculaBonificacao() . PHP_EOL;

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacoesDe($randomFuncionario);
$controlador->adicionaBonificacoesDe($randomFuncionaria);
$controlador->adicionaBonificacoesDe($randomDiretor);
$controlador->adicionaBonificacoesDe($umEditorVideo);

echo $controlador->recuperaTotal();