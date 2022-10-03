<?php

function newError($code, $mess, $file, $line) {
    echo "[ERROR]: Ocurrio el codigo error $code => $mess";
}

set_error_handler("newError");

function divide($a, $b) {
    try {
        if ($a <= 0) {
            throw new Exception("El divisor es menor o igual que 0", 1);
            return;
        }
        return $a / $b;
    } catch (Throwable $th) {
        trigger_error($th->getMessage());
        return;
    }
}

$dividendo = -1;
$divisor = 4;

$resultado = divide($dividendo, $divisor);
echo "<br> $dividendo / $divisor = $resultado";
?>