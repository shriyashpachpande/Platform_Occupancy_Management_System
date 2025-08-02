<?php 
session_start();

// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'minifinalproject';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $hashed_pass = password_hash($new_password, PASSWORD_DEFAULT);

    // Check if the user exists with the provided details
    $check_sql = "SELECT * FROM login_system WHERE username = '$username' AND email = '$email' AND dob = '$dob'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        $update_sql = "UPDATE login_system SET password = '$hashed_pass' WHERE username = '$username'";
        if (mysqli_query($conn, $update_sql)) {
            $_SESSION['message'] = "Password updated successfully! Please login.";
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['message'] = "Failed to update password!";
        }
    } else {
        $_SESSION['message'] = "No matching user found. Please check your details.";
    }
}

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="update_password.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Registration</title>
    <style>
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        video {
            min-width: 43%;
            min-height:450px;
            width: auto;
            height: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="sub-div-navbar">
        <a href="index.php">
            <div class="box1">
                Home
            </div>
        </a>
        <a href="information.php">
            <div class="box2">
                Delay
            </div>
        </a>
        <a href="news.php">
            <div class="box3">
                News
            </div>
        </a>
        <a href="login.php">
            <div class="box4">
                Login
            </div>
        </a>
        <a href="contact.php">
            <div class="box5">
                Contact
            </div>
        </a>
    </div>

    <!--Main Div for registration-->
    <div class="main-div-for-blur-img">
    <div class="first-div-for-photo">
        <div class="video_background">
            <video autoplay muted loop class="background-video">
                <source src="images/login_video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="content">
            <!-- You can add any content here, like a form or text -->
         
        </div>
    </div>
        <div class="second-div-for-registration">
            <form action="#" method="post">
                <table style="width: 100%; border-spacing: 20px; margin-top: -3%;">

                    <tr>
                        <th style="width: 50%; height: 0px;"></th>
                        <th style="width: 50%; height: 0px;"></th>
                    </tr>
                    <tr>
                        <th style="width: 50%; height: 50px;"></th>
                        <th style="width: 50%; height: 50px;"></th>
                    </tr>

                    <tr>

                        <td class="outer-edit"> Username :</td>
                        <td> <input type="text " placeholder="Username" class="decorate" name="username" id="username" required></td>

                    </tr>
                    <tr>

                        <td class="outer-edit"> Email</td>
                        <td> <input type="email " placeholder="Email" placeholder="abcxyz@gmail.com" class="decorate" name="email" id="email" required></td>

                    </tr>
                    <tr>

                        <td class="outer-edit"> Date Of Birthday : </td>
                        <td><input type="date" placeholder="Date Of Birth " name="dob" id="dob" class="decorate" max="2025-28-02" required></td>

                    </tr>
                    <tr>

                        <td class="outer-edit"> New Password :</td>
                        <td> <input type="password" placeholder="Create New Password" class="decorate" name="new_password" id="new_password" required></td>

                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="reset" id="reset" name="reset" class="button" style="margin-left: 31%;">&emsp;&emsp; <input type="submit" id="button" name="submit" class="button" style="margin-left: 00%;">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

</html>