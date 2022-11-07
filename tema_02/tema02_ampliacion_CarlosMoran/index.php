<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
  <h1>Test</h1>
  <?php
  include("./ejercicio01/toolsArray.php");

  echo "<br>Array de tamano 4: ";
  $array4 = fillArray(4);
  imprArr($array4);

  echo "<br>Array con nuevo valor: ";
  $arrayNew = genArrayAndNewValue(8, 5);
  imprArr($arrayNew);
  
  echo "<br>Array con nuevo valor: ";
  $arrayNewBeg = genArrayAndNewValueToBegging(8, 5);
  imprArr($arrayNewBeg);
  

  ?>
</body>
</html>