<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta("123456789", 'Jose', 150.0);

echo $primeiraConta->getSaldo();