<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="While Loops.php" method="post">
        <input type="submit" name="stop" value="STOP">
    </form>
</body>
</html>

<?php

    $second =0;
    $running = true;

    while ($running == true) {
        if (isset($_POST["stop"])) {
            $running = false;
        }

        $second++;
        echo $second . "<br>";
    }

?>