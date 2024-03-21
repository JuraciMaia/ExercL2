<?php
// Função para decodificar uma mensagem cifrada usando a Cifra de César
function decifrar($mensagem, $deslocamento) {
    $decifrado = '';

    // Loop para cada caractere da mensagem
    for ($i = 0; $i < strlen($mensagem); $i++) {
        $caractere = $mensagem[$i];

        // Verifica se o caractere é uma letra maiúscula
        if (ctype_upper($caractere)) {
            // Desloca o caractere para a esquerda de acordo com o deslocamento
            $caractere = chr(((ord($caractere) - $deslocamento - 65 + 26) % 26) + 65);
        }

        // Adiciona o caractere decifrado à string de resultado
        $decifrado .= $caractere;
    }

    return $decifrado;
}

// Lendo o número de casos de teste
$n = intval(fgets(STDIN));

// Processando cada caso de teste
for ($i = 0; $i < $n; $i++) {
    // Lendo a mensagem cifrada e o deslocamento
    $mensagem_cifrada = rtrim(fgets(STDIN));
    $deslocamento = intval(fgets(STDIN));

    // Decodificar a mensagem e imprimir o resultado
    echo decifrar($mensagem_cifrada, $deslocamento) . "\n";
}
?>
