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
    function suma($a, $b) { return $a + $b; }
    function resta($a, $b) { return $a - $b; }
    function mult($a, $b) { return $a * $b; }
    function div($a, $b) { return $a / $b; }

    $a = rand(1,20);
    $b = rand(1, 20);
    $c = rand(0, 3); # 0 => suma; 1 => resta; 2 => multiplicacion; 3 => division;

    echo "$a $b <br>";
    switch ($c) {
        case 0:
            $result = suma($a, $b);
            echo "la suma es $result"; 
            break;
        case 1:
            $result = resta($a, $b);
            echo "La resta es $result";
            break;
        case 2:
            $result = mult($a, $b);
            echo "La multiplicacion es $result";
            break;
        case 3:
            $result = div($a, $b);
            echo "La division es $result";
            break;
        
        default:
            echo "Operacion no soportada";
            break;
    }


    ?>
</body>

</html>