<?php
$title = "Ejercicio Ampliación PHP";
$description = "Invoque en un archivo principal.php las funciones 1.b, 1.c y 2.f (ponga mensajes
aclaratorios en cada uno de los datos mostrados)";

$code = function () {
    include("toolsArray.php");
    include("toolsPersona.php");

    function printArrayEcho($array) {
        echo "Array: " . "[" . implode(", ", $array) . "]";;
    }

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>1.b. Utilizando la función anterior se intentará introducir un nuevo valor en el array
    (se pasa por parámetro), en caso de que ya exista en el array devolverá las
    posiciones en las que ese valor se encuentra, en caso contrario devolverá el
    mensaje “No existe, añadiendo...” y se añadirá al final del array.</h3>";
    /*---------------------------------------------------------------------------------------*/
    $newValue = 5;
    echo "Nuevo valor: $newValue<br>";
    echo printArrayEcho(newArrayAndAddValueIfNotExists(10, $newValue));

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>1.c. Repita el ejercicio anterior pero este caso almacene el nuevo valor en la posición
    0 del array (no elimine ningún valor).</h3>";
    /*---------------------------------------------------------------------------------------*/
    $newValue = 9;
    echo "Nuevo valor: $newValue<br>";
    echo printArrayEcho(newArrayAndAddValueToBeggining(5, $newValue));

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>2.f. Muestre el array bidimensional que se le pase por parámetro.</h3>";
    /*---------------------------------------------------------------------------------------*/
    function printMatrix($matrix) {
        foreach ($matrix as $key => $value) {
            echo "$key = { ";
            foreach ($value as $value2) {
                echo "$value2, ";
            }
            echo " }<br>";
        }
    }

    $peopleList = generatePeopleList(10);
    printMatrix($peopleList);

    $person = rand(0, count($peopleList) - 1);
    echo "<br>Parámetro: $person";
    printPerson($peopleList, $person);
};

include("../../template.php");
