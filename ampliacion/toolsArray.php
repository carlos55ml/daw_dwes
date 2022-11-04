<?php
function generateArray($size) {
    $array = array();

    for ($i = 0; $i < $size; $i++) {
        $array[$i] = rand(0, 10);
    }
    return $array;
}

function valueExists($array, $value) {
    $valuePositions = array();

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $value) {
            array_push($valuePositions, $i); // Posicion array
        }
    }
    return $valuePositions;
}

function newArrayAndAddValueIfNotExists($size, $newValue = null) {
    $array = generateArray($size); // Rellenar array

    // Comprobar si existe el nuevo valor e insertar valor si no existe
    $valuePositions = valueExists($array, $newValue);
    if ($valuePositions) {
        echo "El valor existe, está en las siguientes posiciones: " . "[" . implode(", ", $valuePositions) . "]<br>";
    } else {
        echo "No existe el nuevo valor, añadiendo...<br>";
        array_push($array, $newValue);
    }
    
    return $array;
}

function newArrayAndAddValueToBeggining($size, $newValue) {
    $array = generateArray($size); // Rellenar
    
    // Comprobar si existe el nuevo valor e insertar valor al inicio si no existe
    $valuePositions = valueExists($array, $newValue);
    if ($valuePositions) {
        echo "El valor existe, está en las siguientes posiciones: " . "[" . implode(", ", $valuePositions) . "]<br>";
    } else {
        echo "No existe el nuevo valor, añadiendo...<br>";
        array_unshift($array, $newValue); // Introducir valor al inicio
    }

    return $array;
}
