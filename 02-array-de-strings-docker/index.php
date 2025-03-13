<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\arrayDeStringsClass;

$tratarString = new arrayDeStringsClass();

$inputStrings = ["aba", "aa", "ad", "vcd", "aba"];
$resultado = $tratarString->todasStringsMaisLongas($inputStrings);
print_r($resultado);