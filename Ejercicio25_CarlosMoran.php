<?php
include("./tools.php");

$muchoTexto = "Genere un array de tamaño 5x5 con números aleatorios, posteriormente devuelva la
suma de las columnas y de las filas.";

$numeros = array(array());

for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        $numeros[$i][$j] = rand(1,9);
    }
}

imprArr2($numeros);



?>