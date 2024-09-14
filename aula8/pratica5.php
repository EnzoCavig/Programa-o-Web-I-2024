<?php
$disciplinas = array("Programação Web", "Algoritmos", "Estrutura de dados", "Sistemas Operacionais", "Sistemas Distribuidos");

$professores = array("Cleber", "Bastos", "Julian", "Ademar", "Fiamoncini");

for ($i = 0; $i < 5; $i++) {
    echo "Disciplina: " . $disciplinas[$i] . ", professor: " . $professores[$i] . ".<br>";
}
?>
