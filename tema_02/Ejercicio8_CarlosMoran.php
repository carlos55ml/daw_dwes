<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 8</h1>
    <?php
    $a = 10;
    $b = 2;
    $c = 3; # 0 => suma; 1 => resta; 2 => multiplicacion; 3 => division;

    switch ($c) {
        case 0:
            $result = $a + $b;
            echo "la suma es $result"; 
            break;
        case 1:
            $result = $a - $b;
            echo "La resta es $result";
            break;
        case 2:
            $result = $a * $b;
            echo "La multiplicacion es $result";
            break;
        case 3:
            $result = $a / $b;
            echo "La division es $result";
            break;
        
        default:
            echo "Operacion no soportada";
            break;
    }
    ?>
</body>

</html>