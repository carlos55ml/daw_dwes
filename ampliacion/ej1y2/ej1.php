<?php
$title = "Ejercicio Ampliación 1";
$description = "1. Cree un archivo toolsArray.php que deberá incorporar funciones que realicen las
    siguientes operaciones:";

$code = function () {
    include("../../functions.php");

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>Genere un array de X valores aleatorios entre 0 y 10, siendo X el numero de
    elementos de éste, se pasará por parámetro.</h3>";
    /*---------------------------------------------------------------------------------------*/

    function printArrayEcho($array) { echo "Array: "; }

    function newArray($size, $newValue = null) {
        $array = generateArray($size); // Rellenar array
        
        // Comprobar si existe el nuevo valor
        $valueExists = false;
        for ($i = 0; $i < $size; $i++) {
            if ($array[$i] == $newValue) $valueExists = true;
        }

        // Insertar valor si no existe
        if (!$valueExists && $newValue != null) {
            echo "No existe el nuevo valor, añadiendo...<br>";
            array_push($array, $newValue);
        }

        return $array;
    }

    echo printArrayEcho(newArray(5));

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>Utilizando la función anterior se intentará introducir un nuevo valor en el array
    (se pasa por parámetro), en caso de que ya exista en el array devolverá las
    posiciones en las que ese valor se encuentra, en caso contrario devolverá el
    mensaje “No existe, añadiendo...” y se añadirá al final del array.</h3>";
    /*---------------------------------------------------------------------------------------*/

    $newValue = 5;
    echo "Nuevo valor: $newValue<br>";
    echo printArrayEcho(newArray(5, $newValue));
    
    /*---------------------------------------------------------------------------------------*/
    echo "<h3>Repita el ejercicio anterior pero este caso almacene el nuevo valor en la posición
    0 del array (no elimine ningún valor).</h3>";
    /*---------------------------------------------------------------------------------------*/
    
    function generateArray3($size, $newValue) {
        $array = generateArray($size); // Rellenar
        array_unshift($array, $newValue); // Introducir valor al inicio
        return $array;
    }
    
    $newValue = 9;
    echo "Nuevo valor: $newValue<br>";
    echo printArrayEcho(generateArray3(5, $newValue));
};

include("../../template.php");
