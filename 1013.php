<?php
// Captura os três valores inteiros da entrada
$input = fgets(STDIN);

// Divide a entrada em três variáveis
$valores = explode(" ", $input);

// Converte cada valor para inteiro
$a = intval($valores[0]);
$b = intval($valores[1]);
$c = intval($valores[2]);

// Calcula o maior entre a e b utilizando a fórmula fornecida
$maior_ab = ($a + $b + abs($a - $b)) / 2;

// Calcula o maior entre o resultado anterior e c para obter o maior dos três valores
$maior = ($maior_ab + $c + abs($maior_ab - $c)) / 2;

// Imprime o resultado
echo $maior . " eh o maior\n";
?>