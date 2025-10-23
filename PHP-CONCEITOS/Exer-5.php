<?php
echo "Digite um número: ";
$num = trim(fgets(STDIN));

$res = $num % 2;

if ($res == 0) {
    echo "É um numero par";
}
else {
    echo "É um numero impar";
}