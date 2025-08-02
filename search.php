<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<?php

$host = 'localhost';
$db = 'TrainTracker'; 
$user = 'root'; 
$pass = ''; 


try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}


$trainDetails = null;
$searchTrain = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchTrain = trim($_POST['train_number']);  // Capture the form data

    // Search for the train in the database
    $sql = 'SELECT * FROM trains WHERE train_number = :train_number';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['train_number' => $searchTrain]);

    // Fetch train details if found
    $trainDetails = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 8px;
            width: 200px;
        }
        button {
            padding: 8px 12px;
            cursor: pointer;
        }
        .train-info {
            margin-top: 20px;
        }
        .train-info table {
            width: 100%;
            border-collapse: collapse;
        }
        .train-info th, .train-info td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .train-info th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Train Tracker</h1>

<!-- Form for train search -->
<form method="POST" action="">
    <label for="train_number">Enter Train Number:</label>
    <input type="text" id="train_number" name="train_number" required>
    <button type="submit">Track Train</button>
</form>

<!-- Display train details if found -->
<?php if ($trainDetails): ?>
    <div class="train-info">
        <h2>Train Details</h2>
        <table>
            <tr>
                <th>Train Number</th>
                <td><?php echo htmlspecialchars($trainDetails['train_number']); ?></td>
            </tr>
            <tr>
                <th>Train Name</th>
                <td><?php echo htmlspecialchars($trainDetails['train_name']); ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?php echo htmlspecialchars($trainDetails['status']); ?></td>
            </tr>
            <tr>
                <th>Current Location</th>
                <td><?php echo htmlspecialchars($trainDetails['current_location']); ?></td>
            </tr>
            <tr>
                <th>Destination</th>
                <td><?php echo htmlspecialchars($trainDetails['destination']); ?></td>
            </tr>
            <tr>
                <th>Departure Time</th>
                <td><?php echo htmlspecialchars($trainDetails['departure_time']); ?></td>
            </tr>
            <tr>
                <th>Arrival Time</th>
                <td><?php echo htmlspecialchars($trainDetails['arrival_time']); ?></td>
            </tr>
        </table>
    </div>
<?php endif; ?>

<!-- Display a message if no train is found -->
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && !$trainDetails): ?>
    <p>No train found with the provided number. Please check and try again.</p>
<?php endif; ?>

</body>
</html>
