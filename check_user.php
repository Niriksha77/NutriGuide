<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];

    $conn = new mysqli('localhost', 'root', '', 'testnutri');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("SELECT * FROM registration WHERE phone = ?");
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo json_encode(['registered' => true]);
        } else {
            echo json_encode(['registered' => false]);
        }

        $stmt->close();
        $conn->close();
    }
} else {
    echo json_encode(['registered' => false]);
}
?>