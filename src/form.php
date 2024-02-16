<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\PHPMailer.php;
use PHPMailer\PHPMailer\Exception.php;
use PHPMailer\PHPMailer\SMTP.php;

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

 // Initialize PHPMailer
    $mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Email setup
    $to = "emmanuelongurapus@gmail.com";  // Replace with your email address

    try {
        // Server settings
       $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'emmanuelongurapus@gmail.com';
    $mail->Password = 'sharonamoit';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use 'tls' or 'ssl'
    $mail->Port = 587; // Check your email provider for the correct port

        // Recipients
        $mail->setFrom('emmanuelongurapus@gmail.com', 'Contact form');
        $mail->addAddress('emmanuelongurapus@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = '$subject Contact page';
        $mail->Body = 'Name: $name<br>Email: $email<br>Message: $message';

        // Send the email
        $mail->send();

        

     

           echo '<script>alert("Submitted successfully");</script>';
    } catch (Exception $e) {
        echo "Error sending the message. Please try again later. Error: {$mail->ErrorInfo}";
    }
}

?>
