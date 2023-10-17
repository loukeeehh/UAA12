<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo "<p>Hello world</p>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>Le nombre vaut" . $i . "</p>";
    }
    ?>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i != 3)
            echo "<p>le nombre vaut" . $i . "</p>";
    }
    ?>

    <?php
    for ($i = 1; $i <= 10; $i++) {

        if ($i < 4 || $i > 7)
            echo "<p>le nombre vaut" . $i . "</p>";
    }
    ?>

    <?php
    $n = -5;
    $n2 = 10;

     echo " <p>La valeur absolue de " .$n. " vaut " .abs($n). "</p>";
     echo " <p>La valeur absolue de " .$n2. " vaut " .abs($n2). "</p>";    

    ?>   
    


    









</body>

</html>