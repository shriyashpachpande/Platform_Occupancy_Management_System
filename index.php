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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="galary.css">
    
    <title>Home</title>
</head>
<body>
    <div class="backgroundphoto">
        <div class="navigation" style="position: fixed;" >
            <div class="websitename">MS OCCUPANCY</div>&emsp;
            <a href=""><div class="box1">
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
        </div> 
        <div>   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <span class="hometext" >Trains and memories that last forever</span><br><br><br><br>
        <a href="example.php"> <button class="buttonclass" >Track Your Platform</button></a>
    
        </div>
    </div> <br><br><br> <hr>
    <p class="spanclass" >Additional services</p>
    <hr> <div class="ourFeatures" >
        <div class="accident" >
            <div class="prpperty" >
                <a href="available.php"><div class="space" >Available  </div></a>    
            </div>
        </div>
        <div class="twoColmns" >
            <div class="firstBox" >
                <div class="prpperty">
                    <a href="reserve.php"><div class="space" >Ticket Booking</div></a>
                </div>   
            </div>
            <div class="SecondBox">
                <div class="prpperty">
                    <a href="information.php" title="Visit Information Page" class="aa" target="_blank" ><div class="space" >  Train Delay </div></a>
                </div>
            </div>

        </div>
        <div class="timing" >
            <div class="prpperty">
            <div class="space">
                <?php
                    date_default_timezone_set('Asia/Kolkata');
                    $current_date_time = date('Y-m-d H:i:s'); // Date aur time dono dikhana
                ?>
                <script>
                    function updateTime() {
                        var now = new Date();
                        var dateString = now.toISOString().slice(0, 10); // YYYY-MM-DD format
                        var hours = now.getHours().toString().padStart(2, '0');
                        var minutes = now.getMinutes().toString().padStart(2, '0');
                        var seconds = now.getSeconds().toString().padStart(2, '0');
                        var timeString = hours + ':' + minutes + ':' + seconds;
                        document.getElementById('dateTime').innerHTML = dateString + ' ' + timeString; // Date aur time ek line mein
                    }

                    setInterval(updateTime, 1000); // Har second update karo
                </script>
                <div id="dateTime" style=" text-align: center;" ><?php echo date('Y-m-d H:i:s'); ?></div> <!-- Date aur time display -->
            </div>
            </div>
        </div>
   </div>

    <div class="wrapper">
        <div class="container">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="card">
                <div class="row">
                    <div class="icon">1</div>
                    <div class="description">
                        <h4>IR</h4>
                        <p>Shatabdi </p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c2">
            <label for="c2" class="card">
                <div class="row">
                    <div class="icon">2</div>
                    <div class="description">
                        <h4>IR</h4>
                        <p>vivek Express</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c3">
            <label for="c3" class="card">
                <div class="row">
                    <div class="icon">3</div>
                    <div class="description">
                        <h4>IR</h4>
                        <p>Kamyani Express</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c4">
            <label for="c4" class="card">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h4>IR</h4>
                        <p>Sampark Kranti Express</p>
                    </div>
                </div>
            </label>
        </div>
    </div>


   <footer>
        <div class="footer-outer" >
            <div class="footer1" ><br><br>
                   <i class="fa-solid fa-location-dot font"></i> &emsp;
                   <span class="footer-text" > MH26 Nanded MGM  </span> <br>
                   <span class="footer-text" style="margin-left: 93px;" > Maharshtra, India </span> 
                        <br>
                   <i class="fa-solid fa-phone  font"></i> &emsp;
                   <span class="footer-text" >  +91 883 006 6800 </span> <br>
                   <span class="footer-text" style="margin-left: 98px;" >  +91 932 246 2481</span><br>

                   <i class="fa-regular fa-envelope font"></i> &emsp;
                   <span class="footer-text" style="position: relative; top:6px;" >  msoccupancy@gmail.com </span>
            </div>
            <div class="footer1" >
                <p class="texts" >About This Software</p>
                <i class="fa-solid fa-train font"></i>
                <span class="footer-text" style="margin-left: 20px; position: relative; top:6px;" > which train will come on the which  platform</span> <br> 
                <span class="footer-text" style="margin-left: 20px; position: relative; top:6px;" >  &emsp; &emsp; &emsp; at the station </span><br><br>
                <i class="fa-solid fa-ticket font"></i>
                <span class="footer-text" style="margin-left: 20px;  position: relative; top:6px;" >with the help of this Software you can buy  </span>  <br> 
                <span class="footer-text" style="margin-left: 20px;  position: relative; top:6px;">  &emsp; &emsp; &emsp; your platform ticket</span>
            </div>
        </div>
   </footer>
  
</body>
</html>