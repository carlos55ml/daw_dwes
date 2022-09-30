<?php
$notas = array();

for ($i=0; $i < 10; $i++) { 
    $notas[$i] = rand(0,10);
}

print_r($notas);

foreach($notas as &$val) {
    if ($val < 5) {
        $val = "Suspenso";
    } elseif ($val < 7) {
        $val = "Aprobado";
    } elseif($val < 9) {
        $val = "Notable";
    } else {
        $val = "Sobresaliente";
    }
}
echo "<br>";
print_r($notas);
?>