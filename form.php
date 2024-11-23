<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

// Include the config file
$config = require 'config.php';

// Initialize PHPMailer
$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Email setup
    $to = $config['to_email'];  // Get recipient email from config

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = $config['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['email_username'];  // Get Gmail username from config
        $mail->Password = $config['email_password'];  // Get Gmail app-specific password from config
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // 'tls' or 'ssl'
        $mail->Port = $config['smtp_port'];  // SMTP Port

        // Recipients
        $mail->setFrom($email, 'Contact form');
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = 'Name: ' . $name . '<br><br>Message: ' . $message;

        // Send the email
        $mail->send();
        echo '<script>alert("Submitted successfully");</script>';
    } catch (Exception $e) {
        echo "Error sending the message. Please try again later. Error: {$mail->ErrorInfo}";
    }
}
?>
