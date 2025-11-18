<?php
echo "Seu peso (em Kg): ";
$peso = trim(fgets(STDIN));

echo "Sua altura (em metros): ";
$altura = trim(fgets(STDIN));

$imc = $peso / ($altura * $altura);
$imcbr = number_format($imc, 2, ',', '.');

if ($imc < 18.5){
    echo "Seu IMC é de $imcbr e indica condição de magreza";
}
else if ($imc < 24.9){
    echo "Seu IMC é de $imcbr e indica condição normal de peso";
}
else if ($imc < 29.9){
    echo "Seu IMC é de $imcbr e indica condição de sobrepeso";
}
else if ($imc < 34.9){
    echo "Seu IMC é de $imcbr e indica condição de obesidade nivel I";
}
else if ($imc < 39.9){
    echo "Seu IMC é de $imcbr e indica condição de obesidade nivel II";
}
else if ($imc > 40){
    echo "Seu IMC é de $imcbr e indica condição de obesidade nivel III";
}