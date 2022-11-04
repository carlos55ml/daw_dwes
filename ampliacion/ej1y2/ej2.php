<?php
$title = "Ejercicio Ampliación 2";
$description = "2. Genere un archivo toolsPersona.php que deberá incorporar las funciones necesarias
para realizar las siguientes operaciones.";

$code = function () {
    include("../../functions.php");

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>Compruebe un DNI (ej: 12345678A) que se le pase por parámetro, este deberá
    tener 8 números y una letra que se calcula con el resto de dividir el número del
    DNI entre 23 (busque la tabla de equivalencias en internet).</h3>";
    /*---------------------------------------------------------------------------------------*/
    echo "DNI: " . checkDni("48123931L");

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>Genere un DNI aleatorio que cumpla la normativa (puede usar la función de 2.a).</h3>";
    /*---------------------------------------------------------------------------------------*/
    echo "DNI: " . generateDni();

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>Genere un array que almacene 10 nombres.</h3>";
    /*---------------------------------------------------------------------------------------*/
    function returnName() {
        $names = array("Carlos", "Eloy", "Andrés", "Manuel", "Fernando", "Elena", "Quique", "Juande", "Jose María", "Javier");
        return $names[rand(0, count($names) - 1)];
    }

    function arrayNames($size) {
        $array = array();

        for ($i = 0; $i < $size; $i++) {
            $array[$i] = returnName();
        }
        return $array;
    }

    print_r(arrayNames(10));

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>Genere un array que almacene 10 apellidos.</h3>";
    /*---------------------------------------------------------------------------------------*/
    function returnSurname() {
        $surnames = array("Rodríguez", "Calvo", "Suárez", "Martínez", "López", "Mellado", "Menta", "Palazón", "Pérez", "Alonso");
        return $surnames[rand(0, count($surnames) - 1)];
    }
    
    function arraySurnames($size) {
        $array = array();

        for ($i = 0; $i < $size; $i++) {
            $array[$i] = returnSurname();
        }
        return $array;
    }

    print_r(arraySurnames(10));

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>Cree un array bidimensional cuyas claves sean “Persona1”, “Persona2”, ... y
    cuyos valores sean otro array que almacene un nombre aleatorio (del array de
    2.c) dos apellidos (del array de 2.d) y un DNI use la función 2.b</h3>";
    /*---------------------------------------------------------------------------------------*/
    function generatePeopleList($size) {
        $peopleList = array();

        for ($i = 0; $i < $size; $i++) {
            $peopleList["Persona" . $i + 1] = array(returnName(), returnSurname(), returnSurname(), generateDni());
        }
        return $peopleList;
    }

    $peopleList = generatePeopleList(10);
    printMatrix($peopleList);

    /*---------------------------------------------------------------------------------------*/
    echo "<h3>Muestre el array bidimensional que se le pase por parámetro.</h3>";
    /*---------------------------------------------------------------------------------------*/
    function printPerson($list, $index) {
        $trueIndex = $index + 1;
        echo "Persona $trueIndex: " . printArray($list["Persona" . $trueIndex]);
    }

    printPerson($peopleList, rand(0, count($peopleList) - 1));
};

include("../../template.php");
