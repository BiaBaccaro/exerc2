<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

$num1 = 90;
$num2 = 30;
$texto = "É uma string";

    if (is_numeric($num1)) {
        $result1 = $num1 * 2;
    if ($result1 > 100) {
        
        echo "O número é maior que 100: $result1<br>";
    }
    }

    if (is_numeric($num2)) {
        $result2 = $num2 * 2;
    if ($result2 < 100) {
        echo "O número é menor que 100: $result2<br>";
    }
    }

    ?>

</body>
</html>