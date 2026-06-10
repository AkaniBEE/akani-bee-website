<?php
require_once __DIR__ . '/includes/mailer.php';

// Only process POST requests.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["username"] ?? ''));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $sector = trim($_POST["sector"] ?? '');
    $turnover = trim($_POST["turnover"] ?? '');
    $message = trim($_POST["message"] ?? '');

    // Check that data was sent to the mailer.
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please complete the form and try again.";
        exit;
    }

    $subject = "New Contact Message from $name";
    $email_content  = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Sector: $sector\n";
    $email_content .= "Annual Turnover (R): $turnover\n\n";
    $email_content .= "Message:\n$message\n";

    if (send_smtp_mail($subject, $email_content, $email, $name)) {
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong, and we couldn't send your message. Please email us at info@akanibee.co.za.";
    }
} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
