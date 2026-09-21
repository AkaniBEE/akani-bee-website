<?php
require_once __DIR__ . '/includes/mailer.php';
require_once __DIR__ . '/includes/form-guard.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    // Bot protection must pass before anything is sent.
    if (!form_guard_passes()) {
        echo "<script>alert(" . form_guard_js_message() . "); window.history.back();</script>";
        exit;
    }

    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $subject = "New Newsletter / Contact Request";
        $message = "You have a new contact request from: $email";

        if (send_smtp_mail($subject, $message, $email)) {
            header("Location: thank-you.php");
            exit;
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
