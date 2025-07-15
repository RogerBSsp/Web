<?php
// Usando as expressões for e continue, mostre os números 1 a 10 e some todos eles e mostre  o resultado
    $soma = 0;
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
        $soma += $i;
    }
    echo "A soma dos números de 1 a 10 é: $soma";
?>