<?php

$ht = null;
$vt = null;
$pd = null;

echo "Quantas horas você trabalha por mês ? ";
$ht = trim(fgets(STDIN));
echo "Quanto você recebe por hora trabalhada ? ";
$vt = trim(fgets(STDIN));
echo "Qual o percentual de desconto ? ";
$pd = trim(fgets(STDIN));

$sb = $ht * $vt;
$td = ($pd/100) * $sb;
$sl = $sb - $td;

echo "Seu saláro bruto é de $sb." . PHP_EOL;
echo "Seu salário líquido é $sl." . PHP_EOL;
echo "O total de desconto é $td." . PHP_EOL;