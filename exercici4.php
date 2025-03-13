<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4</title>
</head>
<body>
    <h1>Exercici 4</h1>
    <h2>Web que mostra els números de l’1 al 10, fent que cada número sigui un hipervincle a la pàgina corresponent de la Vikipèdia</h2>
    <?php
        $wiki = 'https://es.wikipedia.org/wiki/';
        $num;

        for ($num = 1; $num < 11; $num++) {
            echo '<a href="' , $wiki , $num , '" target="_blank">' , $num , '</a>';
            echo "<br>";
        }
    ?>
    
</body>
</html>