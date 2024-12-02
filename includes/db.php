<?php
$servername = "localhost";
$username = "root";  // Replace with your DB username
$password = "";      // Replace with your DB password
$dbname = "cake_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function saveOrder($name, $email, $cake_type, $quantity, $message) {
    // Database connection (replace with your actual database connection)
    $conn = new mysqli("localhost", "username", "password", "cake_shop_db");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO orders (name, email, cake_type, quantity, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $name, $email, $cake_type, $quantity, $message);

    // Execute the query
    if ($stmt->execute()) {
        echo "Order saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
