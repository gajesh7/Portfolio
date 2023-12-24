<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include the PHPMailer Autoload
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // Set mailer to use SMTP
    $mail->isSMTP();

    // Specify the SMTP server
    $mail->Host       = 'smtp.gmail.com';

    // Enable SMTP authentication
    $mail->SMTPAuth   = true;

    // Your Gmail username
    $mail->Username   = 'jayashreehacharya97@gmail.com';

    // Your Gmail password
    $mail->Password   = '';

    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Set sender email address and name
    $mail->setFrom('gajeshacharya9@gmail.com', 'Jaya');

    // Set recipient email address and name
    $mail->addAddress('jayashreehacharya97@example.com', 'Gajesh');

    // Set email subject and body
    $mail->Subject = 'Subject of the email';
    $mail->Body    = 'This is the body of the email';

    // Send the email
    $mail->send();
    echo 'Email has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
