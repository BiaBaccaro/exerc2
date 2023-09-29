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
$numero1 = 42;
$numero2 = 75;
$texto = "É uma string";

    if (is_numeric($numero1)) {

        $resultado1 = $numero1 * 2;

    if ($resultado1 > 100) {
        
        echo "O resultado é maior que 100: $resultado1<br>";
    }
    } else {
        echo "A variável não é um número<br>";
    }

    if (is_numeric($numero2)) {
    $resultado2 = $numero2 * 2;
    if ($resultado2 > 100) {
        echo "O resultado é maior que 100: $resultado2<br>";
    }
    }

    if (is_numeric($texto)) {
    $resultado3 = $texto * 2;
    if ($resultado3 > 100) {
        echo "O resultado é maior que 100: $resultado3<br>";
    }
    } 
    ?>

</body>
</html>