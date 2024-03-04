<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="If Statement.php" method="post">
        <label for="age">Age: </label>
        <input type="text" name="age">
        <input type="submit" value="Validate">
    </form>
</body>
</html>

<?php
    $age = $_POST["age"];

    if ($age>=18){
        echo "You may pass";
    }
    elseif($age <= 0){
        echo "You are not even born";
    }
    else{
        echo "You shall not pass";
    }

?>