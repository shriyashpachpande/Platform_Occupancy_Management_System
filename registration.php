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
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    

    $check_sql = "SELECT * FROM login_system WHERE number = '$number' OR email = '$email'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
    
        echo '<script>alert("Mobile number or email already exists.");</script>';
    } else {
  
        $sql = "INSERT INTO login_system (fname, lname, username, password, number, email, dob) VALUES ('$fname', '$lname', '$username','$hashed_pass','$number','$email','$dob')";
        $result = mysqli_query($conn, $sql) or die("Query Failed.");

        if ($result) {
            echo '<script>alert("Registration successful! Please login.");    window.location.href = "login.php";</script>';
        } else {
            echo '<div class="alert alert-danger">Registration failed!</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
    <title>Registration</title>
</head>
<body>
    <div class="sub-div-navbar">
    <a href="index.php"><div class="box1">
            Home
        </div></a>
        <a href="information.php"><div class="box2">
            Delay
        </div></a>
        <a href="news.php"><div class="box3">
            News
        </div></a>
        <a href="login.php"><div class="box4">
            Login
        </div></a>
        <a href="contact.php"><div class="box5">
            Contact
        </div></a>
    </div>

    <!--Main Div for registration-->
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
                        
                            <td class="outer-edit" >First Name :</td>
                            <td><input type="text" placeholder="First Name" id="fname" name="fname" class="decorate" required></td>
                       
                     </tr>
                    <tr>
                        
                            <td class="outer-edit" >Last Name :</td>
                            <td> <input type="text " placeholder="Last Name" class="decorate" name="lname" id="lname" required ></td> 
                        
                    </tr>
                    <tr>
                        
                            <td class="outer-edit"> Username :</td>
                            <td> <input type="text " placeholder="Username" class="decorate" name="username" id="username" required ></td> 
                        
                    </tr>
                    <tr>
                   
                            <td class="outer-edit"> Password :</td>
                            <td> <input type="password" placeholder="Create Password" class="decorate" name="password" id="password" required ></td> 
                        
                    </tr>
                    <tr>
                        
                            <td class="outer-edit"> Mobile Number :</td>
                            <td> <input type="number " placeholder="Mobile Number" maxlength="10" class="decorate" name="number" id="number" required ></td> 
                       
                    </tr>
                    <tr>
                        <div class="">
                            <td class="outer-edit"> Email:</td>
                            <td> <input type="email " placeholder="abcxyz@gmail.com" class="decorate" name="email" id="email" required ></td> 
                        </div>
                    </tr>
                    <tr>
                       
                            <td class="outer-edit" > Date Of Birthday : </td>
                            <td><input type="date" placeholder="Date Of Birth " name="dob" id="dob" class="decorate" max="2025-28-02"  required></td>
                       
                    </tr>
                    <tr>
                    <td colspan="2">
                    <input type="reset" id="reset" name="reset" class="button" style="margin-left: 31%;">&emsp;&emsp;  <input type="submit" id="button" name="submit" class="button" style="margin-left: 00%;">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>
</html>