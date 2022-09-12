<?php

$nip = [0,-45,666];

foreach ($nip as $key => $value) {
    if ($value < 0) {
        echo "Esse número é negativo" . PHP_EOL ;
    } elseif ($value > 0) {
            echo "Esse número é positivo" . PHP_EOL;
     } else {
        echo "O número é 0" . PHP_EOL;
    }
        
     
}

