<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"]);
    $serviceType = trim($_POST["service_type"]);
    $message = trim($_POST["message"]);

    $recipient = "info@akanibee.co.za";
    $subject = "New Call Back Request from $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Service Type: $serviceType\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Success message or redirect
        echo "<script>alert('Thank you for your request, we will get back to you soon.'); window.location.href='index.php';</script>";
    } else {
        // Error message
        echo "<script>alert('Oops! Something went wrong, please try again.'); window.history.back();</script>";
    }
} else {
    // Not a POST request, redirect to form or show error
    header("Location: index.php");
    exit;
}
?>
