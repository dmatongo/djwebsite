<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $event_type = $_POST["event_type"];
    $message = $_POST["message"];

    // Recipient email address
    $to = 'dmatongo3@gmail.com';

    // Subject of the email
    $subject = 'New Contact Form Submission';

    // Message content
    $mailContent = "Name: $name\n";
    $mailContent .= "Email: $email\n";
    $mailContent .= "Phone: $phone\n";
    $mailContent .= "Type of Event: $event_type\n";
    $mailContent .= "Message:\n$message\n";

    // Additional headers
    $headers = 'From: ' . $email . "\r\n";

    // Send email
    if(mail($to, $subject, $mailContent, $headers)){
        echo 'Thank you for your submission!';
    } else{
        echo 'Mail sending failed.';
    }
}
?>
