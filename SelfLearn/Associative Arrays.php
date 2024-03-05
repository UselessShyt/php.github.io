<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Associative Arrays.php" method="post">
        <label for="country">Enter a country</label>
        <input type="text" name="country">
        <input type="submit" value="XD">
    </form>
</body>
</html>

<?php

    $capitals = array("USA"=>"Washington D.C.", "Japan"=>"Kyoto", "South Korea"=>"Seoul", "India"=>"New Delhi");

    $capitals["USA"] = "Las Vegas";
    $capitals["China"] = "BeiJing";

    foreach ($capitals as $key => $value) {
        echo "{$key}, {$value} <br>";
    }

    $keys = array_keys($capitals);
    foreach ($keys as $key) {
            echo "{$key} <br>";
        }

    $values = array_values($capitals);
    foreach ($values as $value) {
        echo "{$value} <br>";
    }

    echo "-------------------------------------------------------------------------------------------------------<br>";

    $capital = $capitals[$_POST["country"]];

    echo "The capital is $capital";

    
?>