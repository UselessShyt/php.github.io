<?php
    $username = array("Bro", "The", "Code"); $phone = "123-456-7890";
    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username);
    //$username = str_pad($username, 20, "0");
    //$phone = str_replace("-", "", $phone);
    //$username = strrev($username);
    //$username = str_shuffle($username);
    //$equals = strcmp($username, "Bro Code");
    //$count = strlen($phone);
    //$index = strpos($phone, "-");
    //$firstname = substr($username, 0, 3);
    //$lastname = substr($username, 4);
    //$fullname = explode("", $username);
    $username = implode("-", $username);
    
    echo $username;
?>