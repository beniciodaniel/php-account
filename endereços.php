<?php

use Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Curitiba', 'bairro qualquer', 'Minha rua', 323);
$outroEndereco = new Endereco('Rio', 'centro', 'Minha rua', 111);


echo $umEndereco->recuperaCidade() . PHP_EOL;

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;



