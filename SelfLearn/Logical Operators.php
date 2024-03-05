<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="If Statement.php" method="post">
        <label for="temp">Temp: </label>
        <input type="text" name="temp">
        <input type="submit" value="Validate">
    </form>
</body>
</html>

<?php
    $temp = $_POST["temp"];
    $cloudy = false;

    if ($temp >=0 && $temp <= 30){
        echo "The weather is good"."<br>";
    }else{
        echo "What a bad weather"."<br>";
    }

    if (!$cloudy){
        echo"The sky is clear";
    }else{
        echo"The sky is not clear";
    }
?>