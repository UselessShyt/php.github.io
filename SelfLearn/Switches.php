<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Switches.php" method="post">
        <label for="grade">Grade: </label>
        <input type="text" name="grade">
        <input type="submit" value="Check Grade">
    </form>
</body>
</html>

<?php
    $grade = $_POST["grade"];

    switch($grade){
        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did ok";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "You failed";
            break;
        default:
            echo "{$grade} is not a grade";
}
?>