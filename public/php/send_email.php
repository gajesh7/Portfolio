<?php
<!-- use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer Autoload file
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php'; -->

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configure your SMTP settings
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gajeshacharya9@gmail.com';
    $mail->Password = '249DC019A261511EF98299D094F9A511B1B3';
    $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl' based on your server
    $mail->Port = 587; // Use 587 for TLS or 465 for SSL

    try {
        // Recipient email address
        $to = 'gajeshacharya9@gmail.com';
        $subject = 'New Contact Form Submission';
    
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        
        // Construct the email body
        $email_body = "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Phone: $phone\n\n";
        $email_body .= "Message:\n$message";

        // Additional headers
        $headers = "From: $email";

        // Send the email
        if (mail($to, $subject, $email_body, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Error sending email.";
        }
    } catch (Exception $e) {
        echo "Error sending email: {$mail->ErrorInfo}";
    }
}
?>
