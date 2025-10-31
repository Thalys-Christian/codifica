<?php
$num = null;
$maior = null;
$menor = null;
$i = true;
while (true) {
    echo "Quando quiser sair insira '-1' " . PHP_EOL ."Digite um número: ";
$num = trim(fgets(STDIN));
if ($num == -1){
    break;
}
else if ($i == true) {
    $maior = $num;
    $menor = $num;
    $i = false;
}
else if ($maior < $num){
    $maior = $num;
}
else if ($menor > $num){
    $menor = $num;
}
}
echo"O maior numero foi $maior e o menor foi $menor";