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

        // Display success message and a button to go back to the index page
        echo "
            <div style='text-align: center; margin-top: 50px; font-family: Arial, sans-serif;'>
                <h1>Order is placed successfully!</h1>
                <a href='index.php' style='display: inline-block; margin-top: 20px; padding: 10px 20px; text-decoration: none; background-color: #4CAF50; color: white; border-radius: 5px; font-size: 16px;'>Go Back to Order Page</a>
            </div>
        ";
    } catch (Exception $e) {
        echo "
            <div style='text-align: center; margin-top: 50px; font-family: Arial, sans-serif;'>
                <h1>Failed to place the order.</h1>
                <p>Error: {$e->getMessage()}</p>
                <a href='index.php' style='display: inline-block; margin-top: 20px; padding: 10px 20px; text-decoration: none; background-color: #f44336; color: white; border-radius: 5px; font-size: 16px;'>Go Back to Order Page</a>
            </div>
        ";
    }
} else {
    // Redirect to the order page if accessed without submitting
    header("Location: index.php");
    exit();
}
