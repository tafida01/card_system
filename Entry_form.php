<?php
    error_reporting(0);
    include('./connector/connection.php');

    if(isset($_POST["submit"])){

        $name = $_POST["fulln"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $house = $_POST["house"];
        $nin = $_POST["nin"];
        $insert = $card->query("INSERT INTO userinfo SET `name`='$name', phone='$phone', email='$email', house='$house', nin='$nin'");
    }
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card system</title>
</head>
<body>
    <section class="mainbody">
        <div>
            <form method="post">
                <label>
                    Full Name: <input type="text" name="fulln">
                </label>
                <label>
                    phone number: <input type="text" name="phone">
                </label>
                <label>
                    Email address: <input type="text" name="email">
                </label>
                <label>
                    house address: <input type="text" name="house">
                </label>
                <label>
                    nin number: <input type="text" name="nin">
                </label>
                <button name="submit">submit</button>
            </form>
        </div>
    </section>
</body>
</html>