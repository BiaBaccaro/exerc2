<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
// Declare duas variáveis com números e uma com uma string
$num1 = 50;
$num2 = 60;
$texto = "É uma string";

    if (is_numeric($num1)) {

        $resultado1 = $num1 * 2;

    if ($resultado1 > 100) {
        
        echo "O número é maior que 100: $resultado1<br>";
    }
    }

    if (is_numeric($num2)) {
    $resultado2 = $num2 * 2;
    if ($resultado2 > 100) {
        echo "O número é maior que 100: $resultado2<br>";
    }
    }

    if (is_numeric($texto)) {
    $resultado3 = $texto * 2;
    if ($resultado3 > 100) {
        echo "O número é maior que 100: $resultado3<br>";
    }
    } 
    ?>

</body>
</html>