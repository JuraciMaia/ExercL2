<?php

$N = fgets(STDIN);

echo "$N";

$notas = intval($N/100);

echo "$notas nota(s) de R$ 100,00\n";


$N = $N - $notas*100;

$notas = intval($N/50);

echo "$notas nota(s) de R$ 50,00\n";

$N = $N - $notas*50;

$notas = intval($N/20);

echo "$notas nota(s) de R$ 20,00\n";

$N = $N - $notas*20;

$notas = intval($N/10);

echo "$notas nota(s) de R$ 10,00\n";

$N = $N - $notas*10;

$notas = intval($N/5);

echo "$notas nota(s) de R$ 5,00\n";

$N = $N - $notas*5;

$notas = intval($N/2);

echo"$notas nota(s) de R$ 2,00\n";

$N = $N - $notas*2;

$notas = intval($N/1);

echo "$notas nota(s) de R$ 1,00\n";