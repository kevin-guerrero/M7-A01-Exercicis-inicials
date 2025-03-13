<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 3</title>
</head>
<body>
    <h1>Exercici 3</h1>
    <h2>Web que mostra la taula de multiplicar del 7</h2>
    <?php
        $num1 = 7;
        $num2;
        for ($num2 = 0; $num2 < 11 ; $num2++) {
            echo "$num1 x $num2 = ",$num1 * $num2;
            echo "<br>";
        }
    ?>
</body>
</html>