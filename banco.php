<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$benicio = new Titular(new Cpf('065.676.599-20'), 'Jose da Silva');
$primeiraConta = new Conta($benicio);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo $primeiraConta->recuperaNomeTitular();