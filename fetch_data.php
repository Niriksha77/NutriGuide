<?php
// fetch_data.php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $phone = $_GET['phone']; // Use phone number as a unique identifier

    $conn = new mysqli('localhost', 'root', '', 'testnutri');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("SELECT age, height, weight FROM registration WHERE phone = ?");
        $stmt->bind_param("i", $phone);
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
    }
} else {
    echo "Invalid request method.";
}
?>