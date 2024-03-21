<?php
while (true) {
    // Lê os horários atuais e do alarme
    fscanf(STDIN, "%d %d %d %d", $hora_atual, $minuto_atual, $hora_alarme, $minuto_alarme);

    // Verifica se chegou ao final da entrada
    if ($hora_atual == 0 && $minuto_atual == 0 && $hora_alarme == 0 && $minuto_alarme == 0) {
        break;
    }

    // Converte todos os horários para minutos
    $minutos_atual = $hora_atual * 60 + $minuto_atual;
    $minutos_alarme = $hora_alarme * 60 + $minuto_alarme;

    // Calcula a diferença entre os horários
    $diferenca_minutos = ($minutos_alarme - $minutos_atual + 1440) % 1440;

    // Imprime a diferença de minutos
    echo "$diferenca_minutos\n";
}
?>
