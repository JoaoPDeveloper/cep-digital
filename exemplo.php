<?php

require 'vendor/autoload.php';

use Joaopdeveloper\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAdressFromZipCode('01001-000');

print_r($resultado);
