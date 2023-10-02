<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "cardsystem";

    // create connection
    $card = mysqli_connect($serverName, $userName, $password, $dbName);

    if(mysqli_connect_errno()){
        echo "unable to connect!";
        exit();
    }
?>