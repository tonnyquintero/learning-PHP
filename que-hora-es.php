<?php

$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int) ($segundos / 3600);
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);

echo ("Son $horas horas, $minutos minutos y $segundos segundos.") . "\n";

$segundosReto = readline("Ingresa la cantidad de horas: ");

$horasReto = (int) ($segundosReto * 3600);
// $segundos = (int) ($segundos % 3600);
echo ("Son $horasReto segundos.") . "\n";

$minutosReto2 = readline("Ingresa la cantidad de minutos: ");

$minutosReto = (int) ($minutosReto2 * 60);
// $segundos = (int) ($segundos % 60);
echo ("Son $minutosReto segundos.") . "\n";

$segundosReto2 = readline("Ingresa la cantidad de segundos: ");

echo "La cantidad de segundos es " . ($horasReto + $minutosReto + $segundosReto2) . "\n";

