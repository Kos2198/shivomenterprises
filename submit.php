<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address.
    $to = "singhsanjan0@gmail.com"; // Replace with your email address

    // Set the email subject.
    $subject = "New Contact Form Submission";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Set the email headers.
    $headers = "From: $email";

    // Send the email.
    if (mail($to, $subject, $email_content, $headers)) {
        // Success, redirect to a thank you page
        header("Location: thank-you.html");
    } else {
        // Failure, redirect back to the form with an error message
        header("Location: contact.html?error=1");
    }
}
?>
