<?php
// Database connection parameters
$host = 'localhost';
$db = 'TrainTracker';
$user = 'root'; // MySQL username
$pass = ''; // MySQL password

// Connect to the database using PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db: " . $e->getMessage());
}

// Initialize variables
$trainDetails = null;
$searchTrain = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchTrain = trim($_POST['train_number']);  // Capture the entered train number

    // Check if the entered train number is not empty
    if (!empty($searchTrain)) {
        // Check if train number exists in the database
        $sqlCheck = 'SELECT COUNT(*) FROM trains WHERE train_number = :train_number';
        $stmtCheck = $pdo->prepare($sqlCheck);
        $stmtCheck->execute(['train_number' => $searchTrain]);

        // Get the result of the count query
        $exists = $stmtCheck->fetchColumn();

        if ($exists) {
            // If the train number exists, proceed with fetching the details
            $sql = 'SELECT * FROM trains WHERE train_number = :train_number';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['train_number' => $searchTrain]);

            $trainDetails = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            // If the train number does not exist
            $trainDetails = null;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Tracker</title>
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

<form method="POST" action="">
    <label for="train_number">Enter Train Number:</label>
    <input type="text" id="train_number" name="train_number" required>
    <button type="submit">Track Train</button>
</form>

<!-- If Train Details are Found, Display Them -->
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

<!-- If No Train is Found, Show Message -->
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && !$trainDetails): ?>
    <p>No train found with the provided number. Please check and try again.</p>
<?php endif; ?>

</body>
</html>
