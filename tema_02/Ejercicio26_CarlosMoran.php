<?php
include("./tools.php");

$muchoTexto = "Diseña una función que determine la cantidad total a pagar por una llamada telefónica
de acuerdo con las siguientes premisas:
• Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
• Cada minuto adicional a partir de los 3 primeros cuesta 5 céntimos/minuto.";

function calcularPrecio($duracion) {
    $coste = 0.10;
    if ($duracion > 3) {
        return $coste + ((($duracion - 3)*5)/100);
    } else return $coste;
}

$duracionLlamada = 17;
$costeLlamada = calcularPrecio($duracionLlamada);

echo "Su llamada ha sido de <b>$duracionLlamada minutos</b> y el coste es de <b>$costeLlamada €</b>";


?>