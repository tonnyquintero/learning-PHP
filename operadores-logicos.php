<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_php = false;

// AND

var_dump($michis_felinos && $michis_4_patas) . "\n";

var_dump($michis_vuelan && $michis_4_patas) . "\n";

var_dump($michis_vuelan && $michis_programan_con_php) . "\n";

// OR

var_dump($michis_4_patas || $michis_felinos) . "\n";

var_dump($michis_vuelan || $michis_felinos) . "\n";

var_dump($michis_vuelan || $michis_programan_con_php) . "\n";

// NOT (le invierte el valor)

var_dump( !$michis_4_patas ) . "\n";

var_dump( !$michis_programan_con_php ) . "\n";




