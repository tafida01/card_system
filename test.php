<?php
    error_reporting(0);
    include('./connector/connection.php');

    if(isset($_POST["submit"])){

        $name = $_POST["fulln"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $house = $_POST["house"];
        $image = $_FILES['idpp'];
        $imgefilesname = $image['name'];
        $imagefileerror = $image['error'];
        $imagefiletmp = $image['tmp_name'];
        $filename_separate = explode('.', $imgefilesname);
        $file_extension = strtolower($filename_separate[1]);
        $extension = array('jpeg', 'png', 'jpg');
        $uploadimage = 'uploads/'.$imgefilesname;
        move_uploaded_file($imagefiletmp,$uploadimage);

        $sql = $card->query(" INSERT INTO `userinfo` SET `name`='$name', phone='$phone', email='$email', house='$house', photos='$uploadimage'");

        
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
            <form method="post" enctype="multipart/form-data">
                <div class="mb-2">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="fulln" placeholder="">
                    </div>
                    <div class="mb-2">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="">
                    </div>
                    <div class="mb-2">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" placeholder="">
                    </div>
                    <div class="mb-2">
                        <label>House Address</label>
                        <input type="text" class="form-control" name="house" placeholder="">
                    </div>
                    
                    <div class="mb-2">
                        <label class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="idpp">
                    </div>
                    <div class="mt-2">
                        <button name="submit" class="btn btn-dark w-25">submit</button>
                        <a href="login.php" class="link-secondary">Login</a>
                    </div>
            </form>
        </div>
    </section>
</body>
</html>