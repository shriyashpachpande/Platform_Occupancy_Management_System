<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Check</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="reservemodified.css">
    <link rel="stylesheet" href="example.css">
</head>

<body>
    <div class="navigation" style="position: fixed;">
        <div class="websitename">MS OCCUPANCY</div>&emsp;
        <a href="index.php">
            <div class="box1">
                Home
            </div>
        </a>
        <a href="information.php">
            <div class="box1">
                Delay
            </div>
        </a>
        <a href="news.php">
            <div class="box1">
                News
            </div>
        </a>
        <a href="reserve.php">
            <div class="box1">
                Booking
            </div>
        </a>
        <a href="contact.php">
            <div class="box3">
                Contact
            </div>
        </a>
        <a href="login.php">
            <div class="box1">
                Login
            </div>
        </a>
        <div class="socialmedia">
            <a href="example.php"><span class="socialmediazooming"><i class="fa-solid fa-magnifying-glass"></i></span></a>
            <a href="https://www.facebook.com/"> <span class="socialmediazooming"><i class="fa-brands fa-facebook"></i></span></a>
            <a href="https://www.instagram.com/"> <span class="socialmediazooming"><i class="fa-brands fa-instagram"></i> </span></a>
            <a href="https://x.com/"> <span class="socialmediazooming"><i class="fa-brands fa-twitter"></i></span></a>
            <a href="https://web.whatsapp.com/"> <span class="socialmediazooming"><i class="fa-brands fa-whatsapp"></i></span></a>
        </div>
        <div class="get-started">
            <a href="logout.php"> <span class="getsartedspan" style="font-family:sans-serif;font-size: 22px;font-weight: 600;">Logout</span> </a>
        </div>
    </div><br><br><br><br>

    <h1 style="text-align: center;font-family:sans-serif;font-weight: 600;font-size: 38px;color: #120564;">Welcome To Indian Railway... </h1>

    <hr>
    <br><br>
    <div class="classForm">


        <form action="check.php" method="post">
            <label for="train_number" style="font-family:sans-serif;font-weight: 500;font-size: 18px; letter-spacing: 1px;">Train Number :</label>
            <input type="text" id="train_number" name="train_number" placeholder="Train Number" required>

            <label for="station_name">Station Name:</label>
            <input type="text" id="station_name" name="station_name" placeholder="Station Name" required>
            <div class="result-box1">

            </div>

            <br><br>
            <input type="submit" value="Check"> &emsp;
        </form>
    </div>
    
        <button class="button" style="position: relative; left: 900px; bottom: 115px; height:50px;  background-color: #1a0793;color: white;width: 150px;padding: 10px 15px;border: none;cursor: pointer; border-radius: 15px;" onclick=" checkAdmin()">
            Add Train
        </button>
    
    <script src="autocomplete1.js"></script>
</body>

</html>