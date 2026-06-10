<?php
require_once __DIR__ . '/includes/mailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $subject = "New Newsletter / Contact Request";
        $message = "You have a new contact request from: $email";

        if (send_smtp_mail($subject, $message, $email)) {
            echo "<script>alert('Thank you for your email. We will be in touch soon.'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('There was a problem with your submission, please try again or email info@akanibee.co.za.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Invalid email address.'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
