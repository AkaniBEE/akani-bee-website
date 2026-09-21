<?php
require_once __DIR__ . '/includes/mailer.php';
require_once __DIR__ . '/includes/form-guard.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Bot protection must pass before anything is sent.
    if (!form_guard_passes()) {
        echo "<script>alert(" . form_guard_js_message() . "); window.history.back();</script>";
        exit;
    }

    $name = strip_tags(trim($_POST["name"] ?? ''));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"] ?? '');
    $serviceType = trim($_POST["service_type"] ?? '');
    $sector = trim($_POST["sector"] ?? '');
    $turnover = trim($_POST["turnover"] ?? '');
    $message = trim($_POST["message"] ?? '');

    // Check that data was sent to the mailer.
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Oops! There was a problem with your submission. Please complete the form and try again.'); window.history.back();</script>";
        exit;
    }

    $subject = "New Quote Request from $name";
    $email_content  = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Service Type: $serviceType\n";
    $email_content .= "Sector: $sector\n";
    $email_content .= "Annual Turnover (R): $turnover\n";
    $email_content .= "Message:\n$message\n";

    if (send_smtp_mail($subject, $email_content, $email, $name)) {
        header("Location: thank-you.php");
        exit;
    } else {
        echo "<script>alert('Oops! Something went wrong, please try again or email us at info@akanibee.co.za.'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
