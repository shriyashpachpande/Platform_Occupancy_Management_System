
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
    <link rel="stylesheet" href="information.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="train_delays.css">
    <title>Train Delay Information</title>
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
            <div class="container">
                <table style="width: 100%; border-spacing: 20px; margin-top:3%;" >
                    <tr>
                        <th style="width: 50%; height: 0px;" ></th>
                        <th style="width: 50%; height: 0px;" ></th>
                    </tr>
                    <form action="#" method="POST">
                        <tr>
                            <td colspan="2" style="height: 50px;" ><h1 style="font-family: 'Times New Roman', Times, serif; font-size:40px;" > Train Delay Information</h1></td>
                        </tr>
                        <tr>
                            <td class="outer-edit" > <label for="train_number">Train Number:</label></td> 
                            <td>   <input type="text" id="train_number" name="train_number" class="decorate" maxlength="5" placeholder="Train Number" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 50px;" > <input type="submit" value="Check Delay" class="button" style="margin-left: 50px;" > &emsp;&nbsp; <input type="reset" class="button" > &emsp;&nbsp; </form><button class="button" onclick=" checkAdmin()"> Add Train</button> </td>
                        </tr>
                   
                    <tr>
                        
                    <?php
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

                        // Check if form has been submitted
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            // Get train number from user input
                            $train_number = $_POST['train_number'];

                            // Retrieve delay time and reason from train_delays table
                            $sql = "SELECT delay_time, reason FROM train_delays WHERE train_number = '$train_number'";
                            $result = mysqli_query($conn, $sql);

                            // Check if result is found
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                echo "<table style=' border-spacing: 20px; margin-top: -50px;  margin-left: 50px; ' >";
                                    echo "<tr>";
                                        echo "<td class='outer-editecho'>Delay Time:</td>";
                                        echo "<td class='outer-editecho'>" . $row['delay_time'] . "</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td class='outer-editecho'>Reason:</td>";
                                        echo "<td class='outer-editecho'>" . $row['reason'] . "</td>";
                                    echo "</tr>";
                                echo "</table>";

                            } else {
                                echo "<table style=' border-spacing: 20px;' class='tablestyle'>";
                                echo "<tr>";
                                echo "<td class='outer-editecho' >No delay information found for train number  " . $train_number . "</td>";
                                echo "</tr>";
                                echo "</table>";
                            }
                        }

                        // Close connection
                        mysqli_close($conn);
                    ?>
                        
                    </tr>
                    
                </table>

            </div>
        </div>
    </div> 
   <script  >
    
   </script>
</body>
</html>