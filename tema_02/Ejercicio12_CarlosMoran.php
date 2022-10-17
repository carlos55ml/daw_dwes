<?php
$letras = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");

$a = 47426313;

$letra = $a % 23;

echo "La letra para el dni $a es $letras[$letra]";

?>