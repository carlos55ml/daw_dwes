<?php
function imprArr2($array) {
    foreach ($array as $key => $value) {
        echo "<br> \"$key\" = { ";
        foreach ($value as $key2 => $value2) {
            echo "\"$key2\" = \"$value2\", ";
        }
        echo " }";
    }
}

function imprArr($array) {
    echo "<br> { ";
    foreach ($array as $key => $value) {
        echo "$value, ";
    }
    echo " }";
}
?>