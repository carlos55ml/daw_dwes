<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ampliacion</title>
</head>
<body>
  <h1>Ejercicios Ampliacion - Carlos Moran</h1>
  <?php
  include("./ejercicio01/toolsArray.php");
  include("./ejercicio02/toolsPersona.php");

  echo "<br><b>Array con nuevo valor (1.b):</b> ";
  $arrayNew = genArrayAndNewValue(8, 5);
  imprArr($arrayNew);
  
  echo "<br><br><b>Array con nuevo valor al final (1.c):</b> ";
  $arrayNewBeg = genArrayAndNewValueToBegging(8, 5);
  imprArr($arrayNewBeg);

  echo "<br><br><b>Array de personas (2.f):</b> ";
  $personas = genPersonas();
  imprArr2($personas);
  

  ?>
</body>
</html>