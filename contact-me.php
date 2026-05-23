<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $to = 'info@akanibee.co.za';
    $subject = 'New Contact Request';
    $message = "You have a new contact request from: $email";
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if(mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Thank you for your email. We will be in touch soon.'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('There was a problem with your submission, please try again.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Invalid email address.'); window.history.back();</script>";
    }
} else {
    // Redirect to homepage if accessed directly or invalid method
    header("Location: index.php");
    exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>