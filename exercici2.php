<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
</head>
<body>
    <h1>Exercici 2</h1>
    <h2>Web que mostra els números del 100 al 0 fent servir un bucle for, però els números parells en negreta, els senars en cursiva i el 0 en negreta, cursiva i subratllat.</h2>
    <?php
        for ($i = 100; $i>=0; $i--) {
            if($i == 0) {
                echo "<strong> <i> <u> $i </u> </i> </strong>";
            }elseif ($i % 2 == 0) {
                echo "<strong> $i </strong>";
            }elseif ($i % 2 != 0){
                echo "<i> $i </i>";
            }
        }
    ?>
</body>
</html>