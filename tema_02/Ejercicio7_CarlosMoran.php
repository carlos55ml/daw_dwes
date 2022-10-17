<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 7</h1>
    <?php
    $mult5 = 0;
    $mult3 = 0;
    $mult2 = 0;

    for ($i = 1; $i < 50; $i++) {
        if ($i % 2 == 0) $mult2++;
        if ($i % 3 == 0) $mult3++;
        if ($i % 5 == 0) $mult5++;
    }
    echo "Hay $mult2 multiplos de 2 entre 1 y 50 <br>Hay $mult3 multiplos de 3<br>y $mult5 multiplos de 5";
    ?>
</body>

</html>