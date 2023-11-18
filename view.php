<?php

error_reporting(0);
include('./connector/connection.php');

if (isset($_POST['submitt'])){

    $fname = $_POST['fname'];
    $phonen = $_POST['phonen'];

    $view = $card->query("SELECT * FROM userinfo WHERE `name`='$fname' AND phone='$phonen'");
    $fetch = mysqli_fetch_assoc($view);
        $fullName = $fetch['name'];
        $phoneNumber = $fetch['phone'];
        $emaili = $fetch['email'];
        $housei = $fetch['house'];
        $image = $fetch['photos'];
    
    
    
    
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
        <div class="user-veiw shadow">
        <h1>Card <em>System</em></h1>
                <div class="user-content">
                    <section class="user-image">
                        <image src="./<?php echo $image; ?>"width=200px height=200px>
                    </section>
                    <section class="user-information">
                        <label>Full Name<span>: <?php echo $fullName; ?></span></label>
                        <label>Phone Number<span>: <?php echo $phoneNumber; ?></span></label>
                        <label>E-mail Address<span>: <?php echo $emaili; ?></span></label>
                        <label>House Address<span>: <?php echo $housei; ?></span></label>
                    </section>
                </div>

        </div>
    </section>
</body>
</html>