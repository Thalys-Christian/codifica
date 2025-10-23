<?php
echo "Digite o primeiro número: ";
$num1 = trim(fgets(STDIN));
echo "Digite o segundo número: ";
$num2 = trim(fgets(STDIN));

if ($num1 > $num2) {
    echo "$num1 é maior que $num2";
}
else if ($num2 > $num1) {
    echo "$num2 é maior que $num1";
}
else {
    echo "Os números não iguais";
}