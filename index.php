<!DOCTYPE html>
<html>
<head>
    <title>Exemple PHP</title>
</head>
<body>
    <h1><?php echo date('d \d\e M \d\e\l Y') . " – Viva el desarrollo web!"; ?></h1>
    
    
    <?php 
    //Crear una variable e imprimirla
        $text = "M07";
        echo "Aquesta assignatura es $text <br>";
    ?>

    
    <?php
    //Bucle for
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
        }
    ?>
</body>
</html>