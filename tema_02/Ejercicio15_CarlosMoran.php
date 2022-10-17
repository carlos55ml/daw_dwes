<?php
$cadena = "Cadenas-en-PHP-es-facil";

$array = explode("-", $cadena);

for ($i=0; $i < count($array); $i++) {
    $palabra = "";
    if ($i % 2 == 0) {
        $palabra = strtoupper($array[$i]);
    } else {
        $palabra = strtolower($array[$i]);
    }
    echo "<br>$palabra";
}

?>