<?php

$SALARIO1 = 1000;
$SALARIO2 = 2000;
$SALARIO2 = $SALARIO1;
$SALARIO2++;
$SALARIO1 += $SALARIO1 * 0.10;
echo "Valor Salário1: $SALARIO1 Valor Salário2: $SALARIO2 <br>";

if($SALARIO1 > $SALARIO2) {
    echo "O valor de Salário 1 é maior  que Salário 2";
}else{
    if ($SALARIO2 > $SALARIO1) {
        echo "O valor de salário 2 é maior que salário 1";
    } else {
        echo "Os valores são iguais";
        }
    }
?>
