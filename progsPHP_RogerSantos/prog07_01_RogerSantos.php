<?php
//Usando as expressões for e continue, mostre os números no intervalo de 1 a 10, informando quais são pares e quais são impares
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "$i é par<br>";
            continue;
        }
        echo "$i é ímpar<br>";
    }
?>