<?php
    error_reporting(0);
    include('./connector/connection.php');
    session_start();
    $username1 = $_POST['fname'];
    $password1 = $_POST['phonen'];
    
    if(isset($_POST['submitt'])){
        $sql = $card->query("SELECT * FROM userinfo WHERE `name`='$username1' AND phone='$password1'");
        $rows = mysqli_fetch_assoc($sql);
        $username = $rows['name'];
        $password = $rows['phone'];

        $_SESSION['fname'] = $username;
        $_SESSION['phonen'] = $password;
        header("Location: view.php");
        
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css"> 
    <link rel="stylesheet" href="./css/card.css">
    <title>Card system</title>
</head>
<body>
    <section class="mainbody">
        <div class="form-entry shadow">
            <h1>Card <em>System</em></h1>
            <form method="post" action='view.php' enctype="multipart/form-data">
                <div class="mb-2">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="">
                    </div>
                    <div class="mb-2">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phonen" placeholder="">
                    <div class="mt-2">
                        <button name="submitt" class="btn btn-dark w-25">submit</button>
                        <a href="entry_form.php" class="link-secondary">Sign-up</a>
                    </div>
            </form>
        </div>
    </section>
</body>
</html>