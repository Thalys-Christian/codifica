<?php
echo "Altura do seu retângulo: ";
$altura = trim(fgets(STDIN));

echo "Largura do seu retângulo: ";
$largura = trim(fgets(STDIN));

$area = $altura*$largura;

$perimetro = 2*($largura+$altura);

echo "A área do seu retângulo é $area e o perímetro é $perimetro";