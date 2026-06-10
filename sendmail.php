<?php
require_once __DIR__ . '/includes/mailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"] ?? '');
    $serviceType = trim($_POST["service_type"] ?? '');
    $sector = trim($_POST["sector"] ?? '');
    $turnover = trim($_POST["turnover"] ?? '');
    $message = trim($_POST["message"] ?? '');

    $subject = "New Quote Request from $name";
    $email_content  = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Service Type: $serviceType\n";
    $email_content .= "Sector: $sector\n";
    $email_content .= "Annual Turnover (R): $turnover\n";
    $email_content .= "Message:\n$message\n";

    if (send_smtp_mail($subject, $email_content, $email, $name)) {
        echo "<script>alert('Thank you for your request, we will get back to you soon.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong, please try again or email us at info@akanibee.co.za.'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
