<?php
    $x = 2;
    while ($x <= 100) {
        echo $x;
        
        if ($x < 100) {
            echo ", ";
        } else {
            echo ".";
        }
        $x += 2;
    }
?>