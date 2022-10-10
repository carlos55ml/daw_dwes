<?php
include("./tools.php");
$muchoTexto = "Realice una función que al pasarle una ecuación de 2o grado determine el valor de a, b y c.";

$ecuacion = "213x^2 + 3225x + 10 = 18";
$valoresEcuacion = sacarValores($ecuacion);

function sacarValores($ecuacion) {
    $valores = array();

    $valoresX = explode("x", $ecuacion);

    $valores["a"] = $valoresX[0];
    $valores["b"] = explode("^2", $valoresX[1])[1];
    $valores["c"] = explode("=", $valoresX[2])[0];
    $valores["i"] = explode("=", $valoresX[2])[1];

    return $valores;
}

imprArr($valoresEcuacion);