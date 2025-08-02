<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="my.css">
  <link rel="stylesheet" href="navbar.css">
  <style>
    body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

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
            min-width: 100%;
            min-height: 100%;
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: transparent;">
  <div class="video-background">
    <video autoplay muted loop>
      <source src="images/login_video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  <div class="content">
    <div class="sub-div-navbar" >
      <a href="index.php">
        <div class="box1">
          Home
        </div>
      </a>
      <a href="station.php">
        <div class="box2">
          About
        </div>
      </a>
      <a href="reserve.php">
        <div class="box3">
          Platform
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
    <div class="wrapper" style="background-color: transparent;">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="Username" name="username" id="username" autocomplete="off" required>

        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" name="password" autocomplete="off" id="password" required>

        </div>
        <div class="remember-forgot" style="color: white;">
          <label><input type="checkbox" required >Remember Me</label>
          <a href="update_password.php">Forgot Password</a>
        </div>
        <button type="submit" name="login" id="login" class="btn">Login</button>
        <div class="register-link">
          <p>Dont have an account? <a href="registration.php">Register</a></p>
        </div>
      </form>
    </div>

  </div>
<script>
  window.addEventListener('load', function() {
            const div = document.getElementById('username');
            div.classList.add('visible'); // Add the class to trigger the animation
        });
        window.addEventListener('load', function() {
            const div = document.getElementById('password');
            div.classList.add('visible'); // Add the class to trigger the animation
        });
</script>

    <!--PHP STATRETD-->
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

    if (isset($_POST['login'])) {
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      $sql = "SELECT * FROM login_system WHERE username = '$username'";
      $result = mysqli_query($conn, $sql) or die("Query Failed.");

      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stored_hash = $row['password'];

        if (password_verify($password, $stored_hash)) {
          $_SESSION["username"] = $row['username'];
          $_SESSION["sno"] = $row['sno'];
          header("Location: dashboard.php");
          exit();
        } else {
          echo '<div class="alert alert-danger">Invalid username or password</div>';
        }
      } else {
        echo '<div class="alert alert-danger">Invalid username or password</div>';
      }
    }

    ?>
</body>

</html>