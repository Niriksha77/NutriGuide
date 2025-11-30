<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $phone = $_POST['phone'];

        $conn = new mysqli('localhost', 'root', '', 'testnutri');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO registration (name, age, gender, height, weight, phone) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sisiii", $name, $age, $gender, $height, $weight, $phone);
            $stmt->execute();
            echo "Registration successful";
            $stmt->close();
            $conn->close();
        }
    } else {
        echo "Invalid request method.";
    }
?>