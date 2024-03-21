<?php
// Função para calcular o MDC usando o algoritmo de Euclides
function mdc($a, $b) {
    while ($b != 0) {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }
    return $a;
}

// Lendo o número de casos de teste
$n = intval(fgets(STDIN));

// Processando cada caso de teste
for ($i = 0; $i < $n; $i++) {
    // Lendo a quantidade de figurinhas de Ricardo e Vicente
    list($f1, $f2) = explode(" ", fgets(STDIN));

    // Calculando o MDC entre as quantidades de figurinhas
    $tamanho_maximo_pilha = mdc($f1, $f2);

    // Imprimindo o resultado
    echo $tamanho_maximo_pilha . "\n";
}
?>
