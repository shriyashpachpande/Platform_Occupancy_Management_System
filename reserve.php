
<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="reserve.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="reservemodified.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Platform Ticket</title>
</head>
<body>

<div class="navigation" style="position: fixed;" >
            <div class="websitename">MS OCCUPANCY</div>&emsp;
            <a href="index.php"><div class="box1">
                Home
            </div></a>
            <a href="information.php"><div class="box1">
                Delay
            </div></a>
            <a href="news.php"><div class="box1">
                News
            </div></a>
            <a href="reserve.php"><div class="box1">
            Booking
            </div></a>
            <a href="contact.php"><div class="box3">
                Contact
            </div></a>
            <a href="login.php"><div class="box1">
                Login
            </div></a>


            <div class="socialmedia">
            <a href="example.php"><span class="socialmediazooming" ><i class="fa-solid fa-magnifying-glass"></i></span></a> 
               <a href="https://www.facebook.com/"> <span class="socialmediazooming" ><i class="fa-brands fa-facebook"></i></span></a>
               <a href="https://www.instagram.com/"> <span class="socialmediazooming" ><i class="fa-brands fa-instagram"></i> </span></a> 
               <a href="https://x.com/"> <span class="socialmediazooming" ><i class="fa-brands fa-twitter"></i></span></a>
               <a href="https://web.whatsapp.com/"> <span class="socialmediazooming" ><i class="fa-brands fa-whatsapp"></i></span></a>
            </div>
            <div class="get-started">
            <a href="logout.php"> <span class="getsartedspan" style="font-family:sans-serif;font-size: 22px;font-weight: 600;" >Logout</span> </a>
            </div>
    </div><br><br><br><br><br>
    
    <div class="outersearchbx" >  <form action="ticket.php" method="POST">
        <div class="search-box">
            <div class="row">
                <input type="text " id="input-box" id="name" name="name" placeholder="Search Station" required autocomplete="off" >
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="result-box">

            </div>
        </div>
        <div class="search-box" style="position: relative; top: -169px; " >
            <div class="row">
                <input type="number" id="input-box" id="platform" name="platform" required placeholder="Number Of Tickets" >
            </div>

        </div><div >
        <input type="submit" value="Book Ticket" class="submitbuton" style="margin-left: 100px;" ></div>
        </form>
    </div> 
<script src="autocmplete.js"></script>

</body>
</html>
