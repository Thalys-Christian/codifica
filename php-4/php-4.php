<?php
echo "Valor original do produto: ";
$valor = trim(fgets(STDIN));

echo "Pencentual do desconto (apenas número): ";
$desc = (trim(fgets(STDIN)))/100;

if ($desc <= 0 || $desc > 1){
    echo "Desconto inválido";
}
else{
    $vdesc = $valor-($valor*$desc);
    echo "$vdesc";
}