<?php
// Include the auxiliary functions file
require_once("funcoes.php");

// Call the functions
$mediaNotas = calculaMediaNotas();
$frequencia = calculaFrequencia();

// Display the messages
exibeMensagem("Média de Notas: " . $mediaNotas . "<br>" .
              "Status Nota: " . verificaStatusNotas($mediaNotas) . "<br>" .
              "Frequência: " . $frequencia . "<br>" .
              "Status Frequência: " . verificaStatusFrequencia($frequencia) . "<br>");
?>
