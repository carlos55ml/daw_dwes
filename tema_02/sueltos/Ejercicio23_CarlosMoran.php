<?php
$muchoTexto = "En un primer archivo .php cree una función que genere números aleatorios entre 1 y 10,
así como otra función que haciendo uso de un diccionario (array que asigna números a
letras) genere una clave. Por último, invoque en un nuevo archivo .php a dicha función
y representala por la pantalla.";

$diccionario1 = array("a", "c", "b", "e", "d", "g", "f");

function random($max) {
    return rand(0, $max);
}

function generateKey($length, $dict) {
    $clave = "";
    for ($i=0; $i < $length; $i++) { 
        $clave = $clave.$dict[random(count($dict)-1)];
    }
    return $clave;
}

$contra = generateKey(24, $diccionario1);

echo "$contra";
?>