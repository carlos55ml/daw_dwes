<?php
function imprArr2($array) {
    for ($i=0; $i < count($array); $i++) { 
        echo  "[$i] = { ";
        for ($j=0; $j < count($array[$i]); $j++) { 
            echo $array[$i][$j]." , ";
        }
        echo " } <br>";
    }
}

$matriz = array(array());
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 3; $j++) { 
        $matriz[$i][$j] = rand(0,100);
    }
}

imprArr2($matriz);
?>