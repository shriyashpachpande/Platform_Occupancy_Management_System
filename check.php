

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="reservemodified.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="example.css">
    <title>Reslut</title>
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
                <span class="socialmediazooming" ><i class="fa-solid fa-magnifying-glass"></i></span> 
                <span class="socialmediazooming" ><i class="fa-brands fa-facebook"></i></span>
                <span class="socialmediazooming" ><i class="fa-brands fa-instagram"></i> </span> 
                <span class="socialmediazooming" ><i class="fa-brands fa-twitter"></i></span>
                <span class="socialmediazooming" ><i class="fa-brands fa-whatsapp"></i></span>
            </div>
            <div class="get-started">
            <a href="logout.php"> <span class="getsartedspan" style="font-family:sans-serif;font-size: 22px;font-weight: 600;" >Logout</span> </a>
            </div>
    </div><br><br><br><br><br><br><br><br>

    <div class="classForm-check" >
        <div class="claaForm-Check11">

        </div>
        
        <div class="claaForm-Check1">
        
        <?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "platform"; 

// Connection establish karne
$conn = new mysqli($servername, $username, $password, $dbname);

// Connection check karne
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// User input ghenane
$train_number = $_POST['train_number'];
$station_name = isset($_POST['station_name']) ? $_POST['station_name'] : ''; 

// Query tayar karne
$sql = "SELECT platform_number,train_name FROM train_stations WHERE train_number='$train_number' AND station_name='$station_name'";
$result = $conn->query($sql);

// Result check karne
if ($result->num_rows > 0) {
    // Platform number dikhana
    while($row = $result->fetch_assoc()) {
        echo " <div class='Formiting' > The train number  $train_number <br> is come  $station_name on the <br>platform number :  ". $row['platform_number'] ;
        echo "<br>";echo "<br>";
        echo "Train Name: " . $row['train_name'];echo "<br>";
        echo " <span style='font-weight: 600; font-size: 25px;'; ><i>Happy Journey</i></span>  ";
    }
} else {
    echo " <div class='Formiting' > No match found for the <br> given $train_number and $station_name.";
}

// Connection close karne
$conn->close();
?>
        </div>

        
        <a href="example.php"><button class="button" >Check Again</button> </a> &emsp; <a href="index.php"> <button class="button" >Home</button></a>
    </div>
   
</body>
</html>