<?php
include('../includes/functions.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cake_type = $_POST['cake_type'];
    $quantity = $_POST['quantity'];
    $message = $_POST['message'];

    // Save the order in the database
    try {
        saveOrder($name, $email, $cake_type, $quantity, $message);

        // Send the email notification
        sendOrderNotification($name, $email, $cake_type, $quantity, $message);

        echo "
        <link rel='stylesheet' href='../assets/css/style.css'>
            <div style='display: flex; justify-content: center; align-items: center; min-height: 100vh; font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 0; background: url(\"../assets/image/bg-darkpurple.png\") no-repeat center center fixed; background-size: cover; outline: 2px solid '>
                <div style='max-width: 600px; width: 90%; padding: 30px; border: 5px solid #572267; border-radius: 10px; background-color: #fff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center;'>
                    <h1 style='color: #333; margin-bottom: 20px;'>Order is placed successfully!</h1>
                    <a href='index.php' class='btn-header'>Go Back to Order Page</a>
                </div>
            </div>
        ";
    } catch (Exception $e) {
        echo "
        <link rel='stylesheet' href='../assets/css/style.css'>
            <div style='display: flex; justify-content: center; align-items: center; min-height: 100vh; font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 0; background: url(\"../assets/image/bg-darkpurple.png\") no-repeat center center fixed; background-size: cover;'>
                <div style='max-width: 600px; width: 90%; padding: 30px; border: 5px solid #572267; border-radius: 10px; background-color: #fff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center;'>
                    <h1 style='color: #f44336; margin-bottom: 20px;'>Failed to place the order.</h1>
                    <p style='color: #333; margin-bottom: 20px;'>Error: {$e->getMessage()}</p>
                    <a href='index.php' style='display: inline-block; padding: 10px 20px; text-decoration: none; background-color: #f44336; color: white; border-radius: 5px; font-size: 16px;'>Go Back to Order Page</a>
                </div>
            </div>
        ";
    }
} else {
    // Redirect to the order page if accessed without submitting
    header("Location: /");
    exit(); // Ensure the redirect works
}
