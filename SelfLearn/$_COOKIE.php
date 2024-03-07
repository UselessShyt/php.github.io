<?php
    setcookie("fav_food", "pizza", time() + (60), "/");
    setcookie("fav_drink", "coffee", time() + (60), "/");

    // setcookie("fav_food", "pizza", time() - 0, "/");
    // setcookie("fav_drink", "coffee", time() - 0, "/")

    foreach ($_COOKIE as $key => $value) {
        echo"$key = $value <br>";
    }

    if (isset($_COOKIE["fav_food"])) {
        echo"Buy some {$_COOKIE["fav_food"]}";
    }else{
        echo"No idea what you like";
    }
?>