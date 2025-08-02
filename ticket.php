<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "ticket_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$booking_time = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $date = date("Y-m-d"); 
    $platform = htmlspecialchars($_POST['platform']);

    date_default_timezone_set('Asia/Kolkata'); // Apne timezone ke hisaab se set karein
    $booking_time = date('Y-m-d H:i:s'); 

    $expiration_time = date("Y-m-d H:i:s", strtotime("+2 hours"));

    $stmt = $conn->prepare("INSERT INTO tickets (name, date, platform, expiration_time , booking_time) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $date, $platform,  $expiration_time ,$booking_time);

    if ($stmt->execute()) {
        $ticketId = $stmt->insert_id; 
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    header("Location: reserve.php");
    exit();
}

$stmt = $conn->prepare("SELECT expiration_time FROM tickets WHERE id = ?");
$stmt->bind_param("i", $ticketId);
$stmt->execute();
$stmt->bind_result($expiration_time);
$stmt->fetch();
$stmt->close();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserve.php">
    <title>Your Ticket</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="example.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
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
                Pages
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
                <span class="getsartedspan" >Get Started</span> 
            </div>
        </div>
<br><br><br><br>
<h1 style="text-align: center;font-family:sans-serif;font-weight: 600;font-size: 38px;color: #120564;">Thank You For Platform Booking... </h1>

    <hr><br><br>
    <div class="classForm" style="text-align:center;">
        <h1>Platform Ticket</h1>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Date of Travel:</strong> <?php echo $date; ?></p>
        <p><strong>Number Of Tickets :</strong> <?php echo $platform; ?></p>
        <p><strong>Booking Time:</strong> <?php echo $booking_time; ?></p>
        <p><strong>Valid for 2 hours </strong></p>
        
        <p>Thank you for booking!</p>
        <a href="reserve.php"><button class="button" style="position:relative; top: 80px; width: 250px;">Book Another Tickets</button></a>
    </div>
</body>
</html>
