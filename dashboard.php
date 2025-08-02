<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

?>

<!-- Dashboard content -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dashboard.css">
    <title>After Login</title>
</head>
<body>

    <div class="wrapper">
    <div class="userclass-outer" > <div class="mainuserprofile"> <i class="fa-solid fa-circle-user"></i></div></div>
    <h1 style="color: #f7e7ce;" >Welcome, <?php echo $_SESSION["username"]; ?>!</h1><hr >
    <p class="sentence" >Chugging along the tracks of life, you're on the right journey to success!</p>
    <a href="index.php"><div class="go-home" >Home</div></a>
    </div>
    
   

</body>
</html>