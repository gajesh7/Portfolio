<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "Hello, PHP!";

    error_log("Request method: " . $_SERVER["REQUEST_METHOD"]);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "gajeshacharya9@gmail.com";

    // Set the subject of the email
    $subject = "New Contact Form Submission";

    // Build the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Phone: $phone\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_message);

    // Redirect to a thank you page
    echo '<script>window.location.href = window.location.href;</script>';
    exit;
}
?>
