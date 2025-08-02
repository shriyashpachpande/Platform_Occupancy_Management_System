<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_train_management"; // Updated database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$train_id = $_POST['train_id'];
$initial_platform = $_POST['platform'];

// Function to find an available platform (excluding the currently assigned one)
function getAvailablePlatform($conn, $exclude_platform) {
    $sql = "SELECT platform_number FROM platforms WHERE status = 'available' AND platform_number != $exclude_platform LIMIT 1";
    $result = $conn->query($sql);
    return ($result->num_rows > 0) ? $result->fetch_assoc()['platform_number'] : null;
}

// Check the current status of the requested platform
$sql = "SELECT status FROM platforms WHERE platform_number = $initial_platform";
$result = $conn->query($sql);

if (!$result || $result->num_rows === 0) {
    die("Error: Platform data not found.");
}

$row = $result->fetch_assoc();

if ($row['status'] === 'occupied') {
    // Find an alternative available platform
    $new_platform = getAvailablePlatform($conn, $initial_platform);
    
    if ($new_platform) {
        // Redirect train to the new platform
        $conn->query("UPDATE platforms SET status = 'available' WHERE platform_number = $initial_platform");
        $conn->query("UPDATE platforms SET status = 'occupied' WHERE platform_number = $new_platform");

        // Log the train movement
        $conn->query("INSERT INTO train_movements (train_id, from_platform, to_platform, movement_time) 
                      VALUES ($train_id, $initial_platform, $new_platform, NOW())");

        echo "🚆 Train $train_id redirected from Platform $initial_platform to Platform $new_platform.";
    } else {
        echo "⚠️ No available platforms. Train $train_id must wait.";
    }
} else {
    // Assign train to Platform 1
    $conn->query("UPDATE platforms SET status = 'occupied' WHERE platform_number = $initial_platform");

    // Simulate train departure after a delay (to keep updates infinite)
    sleep(5); // Wait 5 seconds (simulating train departure)
    $conn->query("UPDATE platforms SET status = 'available' WHERE platform_number = $initial_platform");

    echo "✅ Train $train_id arrived at Platform $initial_platform and has departed.";
}

$conn->close();
?>
