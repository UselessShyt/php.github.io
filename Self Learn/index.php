<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id=""><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="Login">
    </form>    
</body>
</html>

<?php
    echo $_POST["username"] . "<br>";
    echo $_POST["password"];
?>