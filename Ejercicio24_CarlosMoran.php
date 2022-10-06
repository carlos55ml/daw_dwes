<?php
include("./tools.php");

$muchoTexto = "Genere un array de 20 números aleatorios y determine cuales de ellos son primos (son
primos si solo se pueden dividir por 1 y por ellos mismos), si no existe ninguno deberá
mostrar “No hay números primos”.";

function isPrime($num) {
    $count = 0;
    for ($i=2; $i <= $num/2; $i++) {
        if($num % $i == 0) return false;
    }
    return true;
}

$numeros = array();

for ($i=0; $i < 20; $i++) { 
    $numeros[$i] = rand(1,150);
}

$primos = array();

foreach($numeros as $valor) {
    if (isPrime($valor)) {
        $primos[] = $valor;
    }
}

echo "<br>Numeros:";
imprArr($numeros);
echo "<br>Primos:";
if(count($primos) == 0) {
    echo "<br>No hay numeros primos.";
} else {
    imprArr($primos);
}
?>