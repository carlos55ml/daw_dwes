<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba Conexion</title>
</head>

<body>
  <h1>Probando resultados</h1>
  <?php
    include("./DB.php");
    $db = new DB;
    $result = $db->query('SELECT * FROM personas');
    foreach ($result as $row) {
      $pId = $row['id'];
      $pNombre = $row['nombre'];
      $pTlfn = $row['tlfn'];

      echo "id = $pId, nombre = $pNombre, tlfn = $pTlfn <br>";
    }

    
  ?>
</body>

</html>