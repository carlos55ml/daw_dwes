<?php
function divide($a, $b) {
    if ($a <= 0) {
        throw new Exception("El divisor es menor o igual que 0", 1);
        return;        
    }
    try {
        return $a / $b;
    } catch (Throwable $th) {
        throw new Exception("Error al dividir", 1);
        return 0;
    }
}

$dividendo = 25;
$divisor = 4;

$resultado = divide($dividendo, $divisor);
echo "$dividendo / $divisor = $resultado";
?>