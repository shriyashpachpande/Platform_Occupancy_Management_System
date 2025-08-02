<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Location Update</title>
</head>
<body>
    <h1>Update Train Location</h1>
    <form action="update_train.php" method="POST">
        <label for="train_id">Train ID:</label>
        <input type="text" id="train_id" name="train_id" required><br><br>

        <label for="current_location">Current Location:</label>
        <input type="text" id="current_location" name="current_location" required><br><br>

        <button type="submit">Update Location</button>
    </form>
</body>
</html>

<?php
// Database connection parameters
$host = 'localhost';
$dbname = 'train_tracking';
$username = 'root';  // Use your MySQL username
$password = '';      // Use your MySQL password

// Create a new PDO instance
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get train ID and current location from POST data
        $train_id = $_POST['train_id'];
        $current_location = $_POST['current_location'];

        // Check if the train already exists in the database
        $stmt = $conn->prepare("SELECT * FROM trains WHERE train_id = :train_id");
        $stmt->bindParam(':train_id', $train_id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Update the existing train's location
            $sql = "UPDATE trains SET current_location = :current_location WHERE train_id = :train_id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':current_location', $current_location);
            $stmt->bindParam(':train_id', $train_id);
            $stmt->execute();
            echo "Train location updated successfully!";
        } else {
            // Insert a new train record
            $sql = "INSERT INTO trains (train_id, current_location) VALUES (:train_id, :current_location)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':train_id', $train_id);
            $stmt->bindParam(':current_location', $current_location);
            $stmt->execute();
            echo "New train location added successfully!";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
