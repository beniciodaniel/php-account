<?php

require_once 'autoload.php';

use Banco\Modelo\Cpf;
use Banco\Modelo\Funcionario;
use Banco\Modelo\Endereco;
use Banco\Modelo\Conta\Conta;
use Banco\Modelo\Conta\Titular;


$endereco = new Endereco("Curitiba", "Bairro Louco", "Rua Crazy","123");

$benicio = new Titular('Jose', new Cpf('666.666.666-00'), $endereco);

$umFuncionario = new Funcionario("Brad", new Cpf("666.888.999-20"), "Desenvolvedor");

echo $benicio->recuperaEndereco()->recuperaCidade() . PHP_EOL;

$primeiraConta = new Conta($benicio);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

var_dump($primeiraConta);