<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
require_once 'src/Endereco.php';
require_once 'src/Pessoa.php';

$endereco = new Endereco('Curitiba', 'bairro qualquer', 'rua minha', '123b');

$benicio = new Titular('Jose da Silva', new Cpf('666.666.666-00'), $endereco);

echo $benicio->recuperaEndereco()->recuperaCidade() . PHP_EOL;

$primeiraConta = new Conta($benicio);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo $primeiraConta->recuperaNomeTitular();

var_dump($primeiraConta);