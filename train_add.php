<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="reservemodified.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="example.css">
    <title>Add Train</title>
</head>

<body>
    <div class="navigation" style="position: fixed;">
        <div class="websitename">MS OCCUPANCY</div>&emsp;
        <a href="index.php">
            <div class="box1">Home</div>
        </a>
        <a href="information.php">
            <div class="box1">Delay</div>
        </a>
        <a href="news.php">
            <div class="box1">News</div>
        </a>
        <a href="reserve.php">
            <div class="box1">Booking</div>
        </a>
        <a href="contact.php">
            <div class="box3">Contact</div>
        </a>
        <a href="login.php">
            <div class="box1">Login</div>
        </a>
        <div class="get-started">
            <a href="logout.php"><span class="getsartedspan" style="font-family:sans-serif;font-size: 22px;font-weight: 600;">Logout</span></a>
        </div>
    </div><br><br><br><br>
    <h1 style="text-align: center;font-family:sans-serif;font-weight: 600;font-size: 38px;color: #120564;" >Add Train Details </h1>

<hr>
<br><br>
        <div class="classForm" style="height: 350px; overflow-y: auto;" >
            
            <form action="train_add.php" method="POST" >
                <label for="train_number" style="font-family:sans-serif;font-weight: 500;font-size: 18px; letter-spacing: 1px;">Train Number:</label>
                <input type="text" id="train_number" name="train_number" required maxlength="5" placeholder="Train Number" ><br>

                <label for="station_name" style="font-family:sans-serif;font-weight: 500;font-size: 18px; letter-spacing: 1px;"> Station Name:</label>
                <input type="text" id="station_name" name="station_name" required placeholder="Station Name" ><br>
                <div class="result-box1" style="position: relative; width: 100%;">

                </div><br>

                <label for="platform_number" style="font-family:sans-serif;font-weight: 500;font-size: 18px; letter-spacing: 1px;">Platform Number:</label>
                <input type="number" id="platform_number" name="platform_number"  placeholder="Add Platform Number" required><br>

                <label for="train_name" style="font-family:sans-serif;font-weight: 500;font-size: 18px; letter-spacing: 1px;">Train Name:</label>
                <input type="text" id="train_name" name="train_name" placeholder="Train Name" required><br>


                <input type="submit" value="Add Train">
            </form>
        </div>

        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "platform";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get form data
            $train_number = $_POST['train_number'];
            $station_name = $_POST['station_name'];
            $platform_number = $_POST['platform_number'];
            $train_name = $_POST['train_name'];



            {
                // Prepare and bind
                $stmt = $conn->prepare("INSERT INTO train_stations (train_number, station_name, platform_number, train_name) VALUES (?, ?, ?, ?)");
                if (!$stmt) {
                    die("Prepare failed: " . $conn->error);
                }

                $stmt->bind_param("ssis", $train_number, $station_name, $platform_number, $train_name);

                // Execute the statement
                if ($stmt->execute()) {
                    echo "<div class='Formiting'>New train added successfully!</div>";
                } else {
                    echo "<div class='Formiting'>Error: " . $stmt->error . "</div>";
                }

                // Close the statement
                $stmt->close();
            }

            // Close the connection
            $conn->close();
        }
        ?>
    </div>

    <script src="autocomplete1.js">

    </script>
</body>

</html>