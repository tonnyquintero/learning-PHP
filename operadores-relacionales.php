<?php

// <=> Nave espacial

echo (2 <=> 1) . "\n"; //retorna 1 si el primer valor es mayor al 2do 

echo (321 <=> 321) . "\n"; //retorna 0 si el primer valor es igual al 2do 

echo (1 <=> 2) . "\n"; //retorna -1 si el primer valor es menor al 2do 

// Fusión de null

$edad_de_pepito = 23;

//utiliza el valor de una variable si alguna de las dos no está definida
echo $edad_de_juanito ?? $edad_de_pepito . "\n";
// Retorna 23
