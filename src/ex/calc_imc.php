<?php
$altura = $_POST["altura"] ?? 0;
$peso = $_POST["peso"] ?? 0;

if ($altura > 0 && $peso > 0) {
    $imc = $peso / ($altura ** 2);
    echo "Seu IMC é " . number_format($imc, 2);
}
?>