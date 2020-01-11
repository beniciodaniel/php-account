<?php

use Banco\Modelo\{Conta\Conta, Conta\ContaPoupanca, Conta\ContaCorrente, Conta\Titular, Cpf, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(new Titular('Goku', new Cpf("123.456.789-10"), new Endereco("Curitiba", 'Bairro Crazy', 'Rua dos Alfeneiros', '1234')), 2);

$conta->deposita(1000);

$conta->saca(100);

echo $conta->recuperaSaldo();


