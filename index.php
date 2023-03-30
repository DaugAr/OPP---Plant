<?php include "./Plant.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $plant = new Plant();
    print_r($plant);
    echo "<br>";
    $plant->name = "Ju";
    $plant->latinName = "Le";
    $plant->perennial = true;
    $plant->height = 3;
    $plant->continents = ["afrika", "azija"];
    $plant->year = 3;
    print_r($plant);

    echo "<br>";

    $plant2 = new Plant("la", "be", true, 5, 1, 1);
    var_dump($plant2);

    ?>

</body>

</html>