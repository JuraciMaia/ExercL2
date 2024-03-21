<?php
// Função para comparar os números de acordo com o critério especificado
function comparar($a, $b) {
    // Se ambos são pares, ordena em ordem crescente
    if ($a % 2 == 0 && $b % 2 == 0) {
        return $a - $b;
    }
    // Se ambos são ímpares, ordena em ordem decrescente
    elseif ($a % 2 != 0 && $b % 2 != 0) {
        return $b - $a;
    }
    // Se um é par e outro é ímpar, coloca o par primeiro
    elseif ($a % 2 == 0) {
        return -1;
    } else {
        return 1;
    }
}

// Lendo o número de valores a serem classificados
$n = intval(fgets(STDIN));

// Inicializando um array para armazenar os valores
$valores = [];

// Lendo os valores e armazenando no array
for ($i = 0; $i < $n; $i++) {
    $valores[] = intval(fgets(STDIN));
}

// Ordenando os valores usando a função de comparação personalizada
usort($valores, 'comparar');

// Imprimindo os valores ordenados
foreach ($valores as $valor) {
    echo $valor . "\n";
}
?>
