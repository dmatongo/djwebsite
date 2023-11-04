<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Your email address
    $recipient = "dmatongo3@gmail.com";

    // User's input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $discovery = $_POST['discovery'];
    $location = $_POST['location'];
    $user_message = $_POST['message'];

    // Create the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "How did you discover us?: $discovery\n";
    $email_content .= "Location of wedding: $location\n";
    $email_content .= "Message: $user_message\n";

    // Create email headers
    $headers = "From: $name <$email>";

    // Send the email
    if(mail($recipient, $subject, $email_content, $headers)) {
        echo "Thank you for reaching out! We'll get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }
} else {
    echo "Form not submitted properly.";
}
?>
