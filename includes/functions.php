<?php
// Include Composer's autoloader
require_once '../vendor/autoload.php';  // Adjust this path if necessary

// Use PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendOrderNotification($name, $email, $cake_type, $quantity, $message) {
    $mail = new PHPMailer(true);
    
    try {
        $mail->SMTPDebug = 0;  // Output detailed debug information for SMTP
        // Set SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Set SMTP server (for Gmail)
        $mail->SMTPAuth = true;
        $mail->Username = '';  // Your Gmail address
        $mail->Password = '';   // Your Gmail password (use App Password for Gmail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Use TLS encryption
        $mail->Port = 587;  // Gmail's SMTP port
        
        // Sender and recipient
        $mail->setFrom('no-reply@cakeshop.com', 'Cake Shop');
        $mail->addAddress('');  // Seller's email
        
        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Cake Order';
        $mail->Body = "<p>You have received a new order!</p>
                       <p><strong>Customer Name:</strong> $name</p>
                       <p><strong>Customer Email:</strong> $email</p>
                       <p><strong>Cake Type:</strong> $cake_type</p>
                       <p><strong>Quantity:</strong> $quantity</p>
                       <p><strong>Message:</strong> $message</p>";
        
        // Send email
        $mail->send();
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cake_type = $_POST['cake_type'];
    $quantity = $_POST['quantity'];
    $message = $_POST['message'];

    // Call the sendOrderNotification function to send email
    sendOrderNotification($name, $email, $cake_type, $quantity, $message);
}

function saveOrder($name, $email, $cake_type, $quantity, $message) {
    $conn = new mysqli('localhost', 'root', '', 'cake_shop');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Adjust column names to match the database schema
    $stmt = $conn->prepare("INSERT INTO orders (customer_name, customer_email, cake_type, quantity, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $name, $email, $cake_type, $quantity, $message);

    if ($stmt->execute()) {
        
    } else {
        echo "Error saving order: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}


?>
