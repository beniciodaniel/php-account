<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
require_once 'src/Endereco.php';

$endereco = new Endereco('Curitiba', 'bairro qualquer', 'rua minha', '123b');

$benicio = new Titular(new Cpf('065.676.599-20'), 'Jose da Silva', $endereco);

$primeiraConta = new Conta($benicio);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo $primeiraConta->recuperaNomeTitular();

var_dump($primeiraConta);