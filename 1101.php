<?php
$M=1;
$N=1;
$count=NULL;

while($M>=1 and $N>=1){
  $count=0;
  // Captura os três valores inteiros da entrada
  $input = fgets(STDIN);

  // Divide a entrada em três variáveis
  $valores = explode(" ", $input);

  // Converte cada valor para inteiro
  $M = intval($valores[0]);
  $N = intval($valores[1]);
  if($M>=1 and $N>=1){
    if($M>$N){
      $aux = $N;
      $N = $M;
      $M = $aux;
    }

    for(; $M<=$N; $M++){
      echo "$M ";
      $count=$count+$M;
    }

    echo "Sum=$count\n";
  }
}

?>