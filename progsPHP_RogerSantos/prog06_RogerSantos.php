<?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 != 0) {
            continue;
        }
        echo "$i é par<br>";
    }
?>