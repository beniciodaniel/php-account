<?php

use Banco\Modelo\Cpf;
use Banco\Modelo\Funcionario\Diretor;
use Banco\Service\Autenticador;

require_once 'autoload.php';

 $autenticador = new Autenticador();

 $umDiretor = new Diretor("Joca", new Cpf("666.666.666-77"), 10000);

 echo $autenticador->tentaLogin($umDiretor, "teste1234");
