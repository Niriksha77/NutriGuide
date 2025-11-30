<?php
// get_user_data.php
header('Content-Type: application/json'); // Set response type to JSON

// Database connection
$conn = new mysqli('localhost', 'root', '', 'testnutri');
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

// Fetch the latest user's data
$stmt = $conn->prepare("SELECT age, height, weight FROM registration ORDER BY id DESC LIMIT 1");
if (!$stmt) {
    die(json_encode(['error' => 'Prepare failed: ' . $conn->error]));
}

$stmt->execute();
$stmt->bind_result($age, $height, $weight);
$stmt->fetch();
$stmt->close();
$conn->close();

// Return data as JSON
echo json_encode([
    'age' => $age,
    'height' => $height,
    'weight' => $weight
]);
?>