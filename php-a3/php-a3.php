<?php
echo "Escolha a unidade de medida a ser convertida. Precione '1' para Celcius e '2' para Fahrenheit: ";
$medida = trim(fgets(STDIN));

echo "Qual a temperatura a ser convertida?: ";
$temp = trim(fgets(STDIN));

if ($medida == 1){
    $conv = ($temp*(9/5)+32);
    echo "$temp ºC são $conv °F";
}
else if ($medida == 2){
    $conv = ($temp-32)*(5/9);
    echo "$temp ºF são $conv °C";
}
else{
    echo "Sem seleção válida";
}
