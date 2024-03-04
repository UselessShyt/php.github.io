<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Math Functions.php" method="post">
        <!--
        <label for="x">x: </label>
        <input type="text" name="x"><br>
        <label for="y">y: </label>
        <input type="text" name="y"><br>
        <label for="z">z: </label>
        <input type="text" name="z">
        <input type="submit" value="Total">
        -->
        <label for="radius">Radius: </label>
        <input type="text" name="radius">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
    /*$x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //$total = abs($x);
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = pow($x, $y);
    //$total = sqrt($x);
    //$total = max($x, $y, $z);
    //$total = min($x, $y, $z);
    //$total = pi();
    //$total = rand(1, 9);

    echo $total;
    */

    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume);

    echo "Circumference = $circumference cm" . "<br>";
    echo "Area = $area cm^2" . "<br>";
    echo "Volume = $volume cm^3" . "<br>";

?>