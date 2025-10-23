<?php
echo "Digite seu ano de nascimento: ";
$ano = trim(fgets(STDIN));

$idade = 2025 - $ano;

echo "Você tem $idade anos";