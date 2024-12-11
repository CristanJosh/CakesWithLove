<?php
// Include Composer's autoloader
require_once '../vendor/autoload.php';  // Adjust this path if necessary
require 'db.php';

// Use PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendOrderNotification($name, $email, $cake_type, $quantity, $message, $order_type, $customer_address) {
    $mail = new PHPMailer(true);
    
    try {
        $mail->SMTPDebug = 0;  // Disable debug information
        // Set SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'cakeswithlove@cakeswithlove.shop';  
        $mail->Password = 'Cakeswithlove@123';  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
        $mail->Port = 587;  
        
        // Sender and recipient
        $mail->setFrom('cakeswithlove@cakeswithlove.shop', 'Cake Shop');
        $mail->addAddress($email);  // Seller's email
        
        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Cake Order';
        $mail->Body = "<p>You have received a new order!</p>
                       <p><strong>Customer Name:</strong> $name</p>
                       <p><strong>Customer Email:</strong> $email</p>
                       <p><strong>Customer Address:</strong> $customer_address</p>
                       <p><strong>Cake Type:</strong> $cake_type</p>
                       <p><strong>Quantity:</strong> $quantity</p>
                       <p><strong>Message:</strong> $message</p>
                       <p><strong>Order Type:</strong> $order_type</p>";
        
        // Send email
        $mail->send();
    } catch (Exception $e) {
        throw new Exception("Email could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }
}

if (isset($_POST['submit'])) {
    // Input sanitization
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $customer_address = htmlspecialchars(trim($_POST['customer_address']));
    $cake_type = htmlspecialchars(trim($_POST['cake_type']));
    $quantity = filter_var($_POST['quantity'], FILTER_VALIDATE_INT);
    $message = htmlspecialchars(trim($_POST['message']));
    $order_type = htmlspecialchars(trim($_POST['order_type']));

    // Input validation
    if (!$name || !$email || !$cake_type || !$quantity || !$order_type) {
        die("All fields are required!");
    }

    // Ensure correct customer address handling
    if ($order_type === 'Delivery' && empty($customer_address)) {
        die("Customer address is required for delivery orders.");
    }

    try {
        // Send order notification email
        sendOrderNotification($name, $email, $cake_type, $quantity, $message, $order_type, $customer_address);
        
        // Save the order in the database
        saveOrder($name, $email, $customer_address, $cake_type, $quantity, $message, $order_type);
        echo "Order saved and email sent successfully!";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

function saveOrder($name, $email, $customer_address, $cake_type, $quantity, $message, $order_type) {
    $conn = new mysqli('localhost', 'root', '', 'cake_shop');

    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Adjust column names to match the database schema
    $stmt = $conn->prepare("INSERT INTO orders (customer_name, customer_email, customer_address, cake_type, quantity, message, order_type) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisss", $name, $email, $customer_address, $cake_type, $quantity, $message, $order_type);

    if (!$stmt->execute()) {
        throw new Exception("Error saving order: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>
