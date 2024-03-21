<?php
// Função para calcular a quantidade de LEDs necessários para montar um número
function calcularLeds($numero) {
    // Definindo a quantidade de LEDs necessários para cada dígito
    $ledsPorDigito = [
        0 => 6, 1 => 2, 2 => 5, 3 => 5, 4 => 4,
        5 => 5, 6 => 6, 7 => 3, 8 => 7, 9 => 6
    ];

    // Inicializando o total de LEDs
    $totalLeds = 0;

    // Calculando a quantidade de LEDs para cada dígito do número
    foreach (str_split($numero) as $digito) {
        $totalLeds += $ledsPorDigito[$digito];
    }

    return $totalLeds;
}

// Lendo o número de casos de teste
$n = intval(fgets(STDIN));

// Processando cada caso de teste
for ($i = 0; $i < $n; $i++) {
    // Lendo o número desejado
    $numero = trim(fgets(STDIN));

    // Calculando a quantidade de LEDs necessários e imprimindo o resultado
    echo calcularLeds($numero) . " leds\n";
}
?>
