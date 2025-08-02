<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_train_management"; // Updated database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch platform statuses
$sql = "SELECT * FROM platforms";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Platform Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(images/track.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }


        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }

        th{
            border: 1px solid #d6d6f6;           
            padding: 10px;text-align: center;
        }
        td {
            border: 1px solid #d6d6f6;
            ;
            padding: 10px;color: white; text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .occupied {
            background-color: red;
            color: white;
        }

        .available {
            background-color: green;
            color: white;
        }

        button {
            padding: 10px;
            margin: 10px;
            cursor: pointer;
        }

        input,
        select {
            height: 30px;
            width: 250px;
            border: 0px solid white;
            padding-left: 20px;
            outline: none;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            border-radius: 5px;
        }

        h3 {
            font-size: 25px;
            text-align: center;
            color: #090158;
            ;
        }

        .button {
            height: 40px;
            width: 150px;
            font-size: 16px;
            font-family: sans-serif;
            text-align: center;
            color: white;
            background-color: #090158;
            outline: none;
            border: 1px solid #090158;
            margin-bottom: 39px;
            cursor: pointer;
            transition: 0.4s;
        }

        .button:hover {
            background-color: #ffc107;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            border: 1px solid white;
            color: white;
        }
        .container{
            display: flex; 
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }
    </style>
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
    </div> <br><br><br><br>
    <h3>🚆 Simulate Train Arrival</h3><br><br>
    <div class="container">

        <input type="number" id="train_id" placeholder="Enter Train ID" required maxlength="5"> <br><br>
        <select id="platform" style="width: 270px;" required>
            <option value="">Select Platform</option>
            <option value="1">Platform 1</option>
            <option value="2">Platform 2</option>
            <option value="3">Platform 3</option>
        </select> <br>
        <button onclick="simulateTrain()" class="button">🚆 Arrive Train</button>
    </div>
    <br>

    <h2 style="color: white; text-align: center;">🚆 Train Platform Status (Live Updates)</h2>

    <table>
        <tr>
            <th>Platform</th>
            <th>Status</th>
        </tr>
        <tbody id="platformTable">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['platform_number']; ?></td>
                    <td id="status_<?php echo $row['platform_number']; ?>"
                        class="<?php echo $row['status'] == 'occupied' ? 'occupied' : 'available'; ?>">
                        <?php echo ucfirst($row['status']); ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>



    <script>
        function updatePlatformStatus() {
            $.get("update_platforms.php", function(data) {
                $("#platformTable").html(data);
            });
        }

        function simulateTrain() {
            let train_id = $("#train_id").val();
            let platform = $("#platform").val();

            if (!train_id) {
                alert("⚠️ Please enter a train ID!");
                return;
            }

            $.post("redirect_train.php", {
                train_id: train_id,
                platform: platform
            }, function(response) {
                alert(response);
                updatePlatformStatus();
            });
        }

        // Auto-refresh platform status every 5 seconds
        setInterval(updatePlatformStatus, 5000);
    </script>

</body>

</html>

<?php $conn->close(); ?>