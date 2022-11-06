<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 10</h1>
    <?php
    $a = 24;
    $b = 3;

    $aux = $a;
    echo "$a * $b = ";

    for ($i=1; $i < $b; $i++) { 
        $a += $aux;
    }
    
    echo "$a";
    ?>
</body>

</html>