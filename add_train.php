

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
    <link rel="stylesheet" href="train_delays.css">
    <title>Add Train</title>
    <style>
        .design{
            margin-left: 200px;
            font-size: 20px;
            font-family: sans-serif;
            color: rgb(91, 87, 87);
        }
    </style>
</head>
<body>

<div class="navigation" style="position: fixed;" >
            <div class="websitename">WEBSITE NAEME HERR</div>&emsp;
            <a href="index.php"><div class="box1">
                Home
            </div></a>
            <a href="information.php"><div class="box1">
                Delay
            </div></a>
            <a href="news.php"><div class="box1">
                News
            </div></a>
            <a href=""><div class="box1">
                Pages
            </div></a>
            <a href=""><div class="box3">
                Contact
            </div></a>
            <a href="login.php"><div class="box1">
                Login
            </div></a>
            <div class="socialmedia">
                <span class="socialmediazooming" ><i class="fa-solid fa-magnifying-glass"></i></span> 
                <span class="socialmediazooming" ><i class="fa-brands fa-facebook"></i></span>
                <span class="socialmediazooming" ><i class="fa-brands fa-instagram"></i> </span> 
                <span class="socialmediazooming" ><i class="fa-brands fa-twitter"></i></span>
                <span class="socialmediazooming" ><i class="fa-brands fa-whatsapp"></i></span>
            </div>
            <div class="get-started">
            <a href="logout.php"> <span class="getsartedspan" style="font-family:sans-serif;font-size: 22px;font-weight: 600;" >Logout</span> </a>
            </div>
    </div><br><br><br><br>

    <div class="main-div-for-blur-img">
        <div class="first-div-for-photo">
            <table style="height: 450px; width: 100%;"  >
               <tr>
                    <th>
                        <div class="zoom"   >

                        </div>
                    </th>
                </tr>

            </table>
               
        </div>
        <div class="second-div-for-registration">
            <form action="#" method="post">
                <table style="width: 100%; border-spacing: 20px; margin-top: -3%;"  >
                
                    <tr>
                        <th style="width: 50%; height: 0px;"></th>
                        <th style="width: 50%; height: 0px;"></th>
                    </tr>
                    <tr>
                        
                            <td class="outer-edit" ><label for="train_number">Train Number :</label></td>
                            <td><input type="text" id="train_number" name="train_number" class="decorate" placeholder="Train Number" required></td>
                       
                     </tr>
                    <tr>
                        
                            <td class="outer-edit" ><label for="starting">Train Origin Station :</label></td>
                            <td> <input type="text" id="starting" name="starting" class="decorate" placeholder="Origin"  required>   </td> 
                        
                    </tr>
                    <tr>
                        
                            <td class="outer-edit"> <label for="ending">Train Destination Station :</label></td>
                            <td> <input type="text" id="ending" name="ending" class="decorate" class="decorate" placeholder="Destination" required></td> 
                        
                    </tr>
                    <tr>
                   
                        <td colspan="2"><input type="submit" id="button" name="submit" value="Submit" class="button" style="margin-left: 130px;" > &emsp;&nbsp; <input type="reset" id="reset" name="reset" class="button" >&emsp;&nbsp;   </td>
                        
                    </tr>
                  
                </table>
            </form>

            <?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'login_system';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $train_number = mysqli_real_escape_string($conn, $_POST['train_number']);

    // Check if train number already exists
    $sql = "SELECT * FROM train_delays WHERE train_number = '$train_number'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='design'>Train Number already exists!</div>";
    } else {
        $delay_time = rand(5, 30);

        // Generate random reason for delay
        $reasons = array("Mechanical issue", "Weather conditions", "Track maintenance", "Signal failure", "Crew availability");
        $reason = $reasons[rand(0, count($reasons) - 1)];

        $sql = "INSERT INTO train_delays (train_number, delay_time, reason) VALUES ('$train_number','$delay_time','$reason')";
        $result = mysqli_query($conn, $sql) or die("Query Failed.");

        if ($result) {
            echo "<div class='design'>Train Add successful!</div>";
        } else {
            echo "<div class='design'>Train Add not successful! failed!</div>";
        }
    }
}
?>


            
        </div>
    </div>
 
</body>
</html>