<?php
$a = null;
$b = null;

while($a > $b || $a == null || $b == null){
    echo "Digite o número 'A': ";
$a = trim(fgets(STDIN));
echo "Digite o número 'B': ";
$b = trim(fgets(STDIN));

if ($a <= $b) {
    echo "$b é maior ou igual que $a. Encerrando o programa";
    break;
}
}