<?php
echo "Digite o valor a ser pago: ";
$vpago = trim(fgets(STDIN));

$vgorjeta = $vpago * 0.10;

$vtotal = $vpago + $vgorjeta;

echo "O valor da gorjeta é de R$ $vgorjeta, somand um total de R$ $vtotal a ser pago";
