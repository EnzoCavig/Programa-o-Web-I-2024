<?php
$SALARIO1 = 1000;
$SALARIO2 = 2000;
$SALARIO2 = $SALARIO1;
$SALARIO2++;
$SALARIO1 += $SALARIO1 * 0.10;

for ($i = 1; $i <= 100; $i++) {
    $SALARIO1++;
    
    if ($i == 50) {
        break;
    }
}

echo "Valor final de SALARIO1: $SALARIO1<br>";
echo "Valor final de SALARIO2: $SALARIO2<br>";

if ($SALARIO1 < $SALARIO2) {
    echo "O valor de SALARIO1 é menor que SALARIO2: $SALARIO1 < $SALARIO2";
} else {
    echo "O valor de SALARIO1 não é menor que SALARIO2: $SALARIO1 >= $SALARIO2";
}
?>
