<?php



function checkDni($dni) {
  $letras = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
  
  $nums = substr($dni, 0, 8);
  $letra = substr($dni, 8);
  
  if (!is_numeric($nums)) {
    return false;
  }
  
  $expected = $nums % 23;
  
  if ($letra !== $letras[$expected]) {
    return false;
  }
  
  return true;
}

function genDni() {
  $letras = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
  $num = rand(10000000, 99999999);
  $letra = $letras[rand(0,22)];

  $dni = $num . $letra;
  
  if(!checkDni($dni)) return genDni();

  return $dni;
}

function giveName() {
  $nombres = ["Carlos", "Juande", "Pariente", "Eloy", "Miguel", "Angel", "Joaquin", "Elena", "Fernando", "Quique"];

  return $nombres[rand(0, count($nombres)-1)];
}

function giveSurname() {
  $apellidos = ["Moran", "Lozano", "Pruna", "Reyes", "Macho", "Ledesma", "Moraza", "Fuentes", "Guisado", "Venegas"];

  return $apellidos[rand(0, count($apellidos)-1)];
}

function genPersonas() {
  for ($i=0; $i < 11; $i++) { 
    $personas["persona".$i] = array(giveName(), giveSurname(), giveSurname(), genDni());
  }
  return $personas;
}

function imprArr2($array) {
  foreach ($array as $key => $value) {
      echo "<br> \"$key\" = { ";
      foreach ($value as $key2 => $value2) {
          echo "\"$key2\" = \"$value2\", ";
      }
      echo " }";
  }
}

?>