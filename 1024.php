<?php
// Função para criptografar uma mensagem
function criptografar($mensagem) {
    // Primeira passada: deslocamento de 3 posições para a direita
    $mensagem = str_replace(range('a', 'z'), range('d', 'z') . 'abc', $mensagem);
    $mensagem = str_replace(range('A', 'Z'), range('D', 'Z') . 'ABC', $mensagem);

    // Segunda passada: inversão da linha
    $mensagem = strrev($mensagem);

    // Terceira passada: deslocamento de uma posição para a esquerda a partir da metade
    $tamanho = strlen($mensagem);
    $metade = intval($tamanho / 2);
    for ($i = $metade; $i < $tamanho; $i++) {
        if (ctype_alpha($mensagem[$i])) {
            $mensagem[$i] = chr(ord($mensagem[$i]) - 1);
        }
    }

    return $mensagem;
}

// Lendo o número de casos de teste
$n = intval(trim(fgets(STDIN)));

// Processando cada caso de teste
for ($i = 0; $i < $n; $i++) {
    // Lendo a linha de entrada e removendo o caractere de quebra de linha
    $linha = rtrim(fgets(STDIN));

    // Criptografar a linha e imprimir o resultado
    echo criptografar($linha) . "\n";
}
?>
