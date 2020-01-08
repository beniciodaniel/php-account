<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/Funcionario.php';
require_once 'src/Modelo/Cpf.php';


$endereco = new Endereco("Curitiba", "Bairro Louco", "Rua Crazy","123");

$benicio = new Titular('Jose', new Cpf('666.666.666-00'), $endereco);

$umFuncionario = new Funcionario("Brad", new Cpf("666.888.999-20"), "Desenvolvedor");

echo $benicio->recuperaEndereco()->recuperaCidade() . PHP_EOL;

$primeiraConta = new Conta($benicio);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

var_dump($primeiraConta);