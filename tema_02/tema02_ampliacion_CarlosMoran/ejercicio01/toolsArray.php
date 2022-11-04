<?php

/**
 * fillArray(int cant)
 * @param {int} cant - tamaño del array deseado
 * @returns array - El array relleno.
 */
function fillArray($cant) {
  $arr = array();
  for ($i=0; $i < $cant; $i++) { 
    $arr[$i] = rand(0, 10);
  }
  return $arr;
}

function valuesExists($arr, $value) {
  $pos = array();
  for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i] == $value) {
      array_push($pos, $i);
    }
  }
  return $pos;
}


?>