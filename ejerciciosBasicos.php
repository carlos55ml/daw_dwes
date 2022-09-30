<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios basicos - Carlos Moran</title>
</head>
<body>
    <h1>Ejercicio 4</h1>

    <?php
        $num = rand(1,4);
        echo "El numero es $num <br>";
        switch ($num) {
            case 1:
                echo "UNO";
                break;
            case 2:
                echo "DOS";
                break;
            case 3: 
                echo "TRES";
                break;
            case 4:
                echo "CUATRO";
                break;
            
            default:
                echo "Excepcion no controlada";
                break;
        }
    ?>
</body>
</html>