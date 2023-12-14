<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Email setup
    $to = "emmanuelongurapus@gmail.com";  // Replace with your email address
    $subject = "Subject:$subject";
    $headers = "From: $email";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send email
    mail($to, $subject, $email_message, $headers);

    // Redirect after submitting
    echo "<script>alert('Submitted successfully');</script>";
    // exit;
}
?>
