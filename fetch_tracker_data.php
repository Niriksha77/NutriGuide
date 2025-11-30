<?php
// fetch_tracker_data.php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $phone = $_GET['phone']; // Use phone number as a unique identifier

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'testnutri');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch meal tracking data for the user
    $stmt = $conn->prepare("SELECT meals, last_updated FROM tracker WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->bind_result($meals, $last_updated);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    // If no data exists, initialize default values
    if (empty($meals)) {
        $meals = json_encode([
            'breakfast' => false,
            'lunch' => false,
            'snacks' => false,
            'dinner' => false
        ]);
        $last_updated = date('Y-m-d'); // Set to today's date
    }

    // Return data as JSON
    echo json_encode([
        'meals' => json_decode($meals, true), // Convert JSON string to associative array
        'last_updated' => $last_updated
    ]);
} else {
    echo "Invalid request method.";
}
?>