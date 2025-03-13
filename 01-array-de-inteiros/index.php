<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\elementosAdjacentesClass; 

$produto = new elementosAdjacentesClass();
$arrayInteiros = [3, 6, -2, -5, 7, 3];
echo "O Maior produto é ".$produto->maiorProdutoElementosAdjacentes($arrayInteiros);