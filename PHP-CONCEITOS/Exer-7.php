<?php
echo "Digite um número: ";
$num = trim(fgets(STDIN));

for ($i = 1; $i <= 10; $i++) {
    $tab = $num * $i;
    echo "$num vezes $i é igual à $tab" . PHP_EOL;
}