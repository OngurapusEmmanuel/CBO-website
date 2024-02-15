
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '28447730891cfb';
    $mail->Password = 'd5c1e8ceb7b35b';
    $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl'
    $mail->Port = 587; // Check your email provider for the correct port

 $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Recipients
    $mail->setFrom('emmanuelongurapus@gmail.com', $name);
    // $mail->addAddress('recipient@example.com', 'Recipient Name');

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
    echo '<script>alert('Submitted successfully');</script>';
} catch (Exception $e) {
    echo 'Error sending email: ', $mail->ErrorInfo;
}
php?>