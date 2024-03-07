<?php
    $password = "Password123";

    $hash = password_hash($password, PASSWORD_BCRYPT);

    if (password_verify("$password", $hash)) {
        echo "You are logged in!";
    }else{
        echo "Nope";
    }
?>