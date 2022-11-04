<?php
function generateDni() {
    return dniLetter(rand(10000000, 99999999));
}

function getDniLetters() {
    return array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
}

/**
 * Devuelve el DNI completo si es correcto.
 */
function dniLetter($dni) {
    $dni_letters = getDniLetters();
    $completeDni = $dni . $dni_letters[$dni % count($dni_letters)];

    if (checkDni($completeDni)) {
        return $completeDni;
    }
}

/**
 * Comprueba si el DNI es correcto.
 */
function checkDni($dni) {
    if (strlen($dni) != 9) {
        echo "El DNI no tiene 8 números<br>";
        return;
    }

    $dni_letters = getDniLetters();
    $char = substr($dni, -1);
    //echo $char . $dni_letters[$dni % count($dni_letters)]. "<br>";

    if (is_numeric($char)) {
        echo "El último carácter no es una letra.<br>";
        return;
    } elseif ($char != $dni_letters[substr($dni, 0, -1) % count($dni_letters)]) {
        echo "El número asociado a este DNI no es correcto.<br>";
        return;
    }
    return $dni;
}

function returnName() {
    $names = array("Carlos", "Eloy", "Andrés", "Manuel", "Fernando", "Elena", "Quique", "Juande", "Jose María", "Javier");
    return $names[rand(0, count($names) - 1)];
}

function getArrayNames($size) {
    $array = array();

    for ($i = 0; $i < $size; $i++) {
        $array[$i] = returnName();
    }
    return $array;
}

function returnSurname() {
    $surnames = array("Rodríguez", "Calvo", "Suárez", "Martínez", "López", "Mellado", "Menta", "Palazón", "Pérez", "Alonso");
    return $surnames[rand(0, count($surnames) - 1)];
}

function getArraySurnames($size) {
    $array = array();

    for ($i = 0; $i < $size; $i++) {
        $array[$i] = returnSurname();
    }
    return $array;
}

function generatePeopleList($size) {
    $peopleList = array();

    for ($i = 0; $i < $size; $i++) {
        $peopleList["Persona" . $i + 1] = array(returnName(), returnSurname(), returnSurname(), generateDni());
    }
    return $peopleList;
}

function printPerson($list, $index) {
    $trueIndex = $index + 1;
    echo "<br>Persona $trueIndex: [" . implode(", ", $list["Persona" . $trueIndex]) . "]<br>";
}
