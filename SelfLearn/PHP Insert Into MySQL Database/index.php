<?php
    include("database.php");

    $username = "Jack";
    $password = "Jack123";
    $hash = password_hash($password , PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";

    try {
        mysqli_query($conn, $sql);
        echo "$username registered";
    } catch (mysqli_sql_exception) {
        echo "Smtg went wrong";
    }

    mysqli_close($conn);
?>
