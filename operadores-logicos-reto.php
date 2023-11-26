<?php

$es_un_michi_grande = true;
$le_gusta_comer= true;
$sabe_volar = false;
$tiene_2_patas = false;

var_dump($es_un_michi_grande && $le_gusta_comer) . "\n";

var_dump($es_un_michi_grande || $sabe_volar) . "\n";

var_dump($sabe_volar || $tiene_2_patas) . "\n";

var_dump(!$le_gusta_comer) . "\n";

var_dump(!$le_gusta_comer || $es_un_michi_grande) . "\n";

