<?php

$turma = [
    "Breno" => 100,
    "Romulo" => 200,
    "Felype" => 300,
    "Gabriel" => 400,
    "Daniel" => 500,
 
];

foreach ($turma as $key => $value) {
    if ($key == "Gabriel") {
        echo "O valor $value pertence a $key" . PHP_EOL;
        break;
    }
}
    