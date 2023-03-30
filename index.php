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
    $plant3 = new Plant();
    $plant3->name = "Ju";
    $plant3->latinName = "Le";
    $plant3->perennial = true;
    $plant3->height = 3;
    $plant3->continents = ["afrika", "azija"];
    $plant3->year = 3;

    $plant4 = new Plant();
    $plant4->name = "Gi";
    $plant4->latinName = "Gu";
    $plant4->perennial = false;
    $plant4->height = 2;
    $plant4->continents = ["europa", "azija"];
    $plant4->year = 1;

    $plant5 = new Plant();
    $plant5->name = "My";
    $plant5->latinName = "Ty";
    $plant5->perennial = true;
    $plant5->height = 1;
    $plant5->continents = ["afrika", "Šiaurės Amerika"];
    $plant5->year = 2;

    $plant6 = new Plant();
    $plant6->name = "Hu";
    $plant6->latinName = "Ke";
    $plant6->perennial = true;
    $plant6->height = 3;
    $plant6->continents = ["afrika", "azija"];
    $plant6->year = 3;

    $plant7 = new Plant();
    $plant7->name = "Ju";
    $plant7->latinName = "Le";
    $plant7->perennial = true;
    $plant7->height = 3;
    $plant7->continents = ["afrika", "azija"];
    $plant7->year = 3;
    // print_r($plant3);

    echo "<br>";
    echo "<br>";

    $plant20 = new Plant("la", "be", true, 5, 1, 1);
    // var_dump($plant2);

    $plants = [
        $plant3,
        $plant4,
        $plant5,
        $plant6,
        $plant7,
        new Plant("Tulip", "Tulipa", true, 0.3, ["Europe", "Asia"], 1637),
        new Plant("Rose", "Rosa", true, 1.5, ["Europe", "Asia", "North America"], 1500),
        new Plant("Daisy", "Bellis perennis", true, 0.1, ["Europe"], 1753),
        new Plant("Orchid", "Orchidaceae", false, 0.6, ["South America", "Asia"], 1758),
        new Plant("Sunflower", "Helianthus annuus", false, 3.0, ["North America"], 1766)
    ];

    foreach ($plants as $plant) {
        echo "Name: " . $plant->name . "<br>";
        echo "Latin name: " . $plant->latinName . "<br>";
        echo "Perennial: " . ($plant->perennial ? "Yes" : "No") . "<br>";
        echo "Height: " . $plant->height . "<br>";
        echo "Continents: " . implode(", ", $plant->continents) . "<br>";
        echo "Year: " . $plant->year . "<br>" . "<br>";
    }

    ?>

</body>

</html>