<?php
// Define global arrays as constants
define("NOTAS", array(6, 8, 10, 7));
define("AULAS", array(0, 1, 0, 0, 1, 0, 0, 1, 0, 0));

function calculaMediaNotas() {
    $somaNotas = 0;
    for ($i = 0; $i < count(NOTAS); $i++) {
        $somaNotas += NOTAS[$i];
    }
    $mediaNotas = $somaNotas / count(NOTAS);
    return $mediaNotas;
}

function verificaStatusNotas($mediaNotas) {
    if ($mediaNotas >= 7) {
        return "Aprovado";
    }
    return "Reprovado";
}

function calculaFrequencia() {
    $somaFrequencia = 0;
    for ($i = 0; $i < count(AULAS); $i++) {
        $somaFrequencia += AULAS[$i];
    }
    $frequencia = 100 - (($somaFrequencia * 100) / $i);
    return $frequencia;
}

function verificaStatusFrequencia($frequencia) {
    if ($frequencia >= 70) {
        return "Aprovado";
    }
    return "Reprovado";
}

function exibeMensagem($mensagem) {
    echo $mensagem;
}
?>
