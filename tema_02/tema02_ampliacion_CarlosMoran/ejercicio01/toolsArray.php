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
      echo "\"$key\" = \"$value\", ";
  }
  echo " }";
}

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

function genArrayAndNewValue($cant, $newVal) {
  $arr = fillArray($cant);
  $arrExist = valuesExists($arr, $newVal);
  if ($arrExist) {
    echo "El valor $newVal ya existe en el array, en las posiciones: ";
    echo "".implode(", ", $arrExist);
  } else {
    echo "El valor $newVal no existe, añadiendo...<br>";
    array_push($arr, $newVal);
  }
  return $arr;
}

function genArrayAndNewValueToBegging($cant, $newVal) {
  $arr = fillArray($cant);
  $arrExist = valuesExists($arr, $newVal);
  if ($arrExist) {
    echo "El valor $newVal ya existe en el array, en las posiciones: ";
    print_r($arrExist);
    imprArr($arrExist);
  } else {
    echo "El valor $newVal no existe, añadiendo al principio del array...<br>";
    array_unshift($arr, $newVal);
  }
  return $arr;
}

?>