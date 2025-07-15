<?php
    $x = 1;
    while ($x <= 100) {
        echo $x;
        if ($x < 100) {
            echo ", "; 
        } else {
            echo ".";
        }
        $x++;
    }
?>