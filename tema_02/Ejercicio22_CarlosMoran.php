<?php
include('./tools.php');

$muchoTexto = "Queremos realizar una encuesta a 10 personas, en esta encuesta indicaremos el sexo
(1=masculino, 2=femenino), si trabaja (1=si trabaja, 2= no trabaja) y su sueldo estará
entre 0 y 2000. Los valores deben ser generados aleatoriamente.
Calcula el porcentaje de hombres (tengan o no trabajo), porcentaje de mujeres (tengan
o no trabajo), el sueldo promedio de los hombres que trabajan y el sueldo promedio de
las mujeres que trabajan.";



$personas = array(array());

for ($i=0; $i < 10; $i++) { 
    $personas[$i] = array(
        "sexo" => rand(1,2),
        "trabaja" => rand(1,2),
        "sueldo" => rand(0,2000)
    );
}

imprArr2($personas);

$countHombres = $countMujeres = $porcHombres = $porcMujeres = $totalSueldoHombres = $totalSueldoMujeres = $mediaSueldoHombres = $mediaSueldoMujeres = 0;

for ($i=0; $i < count($personas)-1; $i++) { 
    if ($personas[$i]["sexo"] == 1) {
        $countHombres++;
        if ($personas[$i]["trabaja"] == 1) {
            $totalSueldoHombres += $personas[$i]["sueldo"];
        }
    }
    if ($personas[$i]["sexo"] == 2) {
        $countMujeres++;
        if ($personas[$i]["trabaja"] == 1) {
            $totalSueldoMujeres += $personas[$i]["sueldo"];
        }
    }
}

echo "<br>
<br> Total hombres: $countHombres
<br> Total Mujeres: $countMujeres
<br><br> Total Sueldo Hombres: $totalSueldoHombres
<br> Total Sueldo Mujeres: $totalSueldoMujeres
";

$porcHombres = ($countHombres / count($personas))*100;
$porcMujeres = ($countMujeres / count($personas))*100;

$mediaSueldoHombres = $totalSueldoHombres / $countHombres;
$mediaSueldoMujeres = $totalSueldoMujeres / $countMujeres;

echo "<br>
Porcentaje hombres: $porcHombres
<br> Porcentaje Mujeres: $porcMujeres
<br><br> Media Sueldo Hombres: $mediaSueldoHombres
<br> Media Sueldo Mujeres: $mediaSueldoMujeres
";


?>