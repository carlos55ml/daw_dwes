<?php
$array = array(2, 20, 3, 9, 3333, 50, 200, 33, 9);
print_r($array);
for ($i=0; $i < count($array); $i++) { 
    if ($array[$i] % 2 == 0) $array[$i] *= 2;
    if ($array[$i] % 3 == 0) $array[$i] *= 3;
}

echo "<br>";
print_r($array);

?>