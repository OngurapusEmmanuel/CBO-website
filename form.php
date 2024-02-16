<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\PHPMailer.php;
use PHPMailer\PHPMailer\Exception.php;
use PHPMailer\PHPMailer\SMTP.php;

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
    $mail->Username = 'ikwedetemmanuel@gmail.com';
    $mail->Password = 'Emmerhnuel@4';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use 'tls' or 'ssl'
    $mail->Port = 587; // Check your email provider for the correct port

        // Recipients
        $mail->setFrom('ikwedetemmanuel@gmail.com');
        $mail->addAddress('emmanuelongurapus@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = '$subject Contact page';
        $mail->Body = 'Name: $name<br>Email: $email<br>Message: $message';

        // Send the email
        $mail->send();

           // echo '<script>alert("Submitted successfully");</script>';
    } catch (Exception $e) {
        echo "Error sending the message. Please try again later. Error: {$mail->ErrorInfo}";
    }
}

?>
