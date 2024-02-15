<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Email setup
    $to = "ikwedetemmanuel@gmail.com";  // Replace with your email address
    $subject = "Subject:$subject";
    $headers = "From: $email";
  // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
       $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '1c21480df20059';
    $mail->Password = '5322259a91dae7';
    $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl'
    $mail->Port = 587; // Check your email provider for the correct port

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "Name: $name<br>Email: $email<br>Message: $message";

        // Send the email
        $mail->send();

           // echo '<script>alert("Submitted successfully");</script>';
    } catch (Exception $e) {
        echo "Error sending the message. Please try again later. Error: {$mail->ErrorInfo}";
    }
}
?>
