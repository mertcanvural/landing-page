<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'mertcanvural9@gmail.com'; // Your email address
    $subject = 'New message from your portfolio site';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo 'Message sent successfully.';
    } else {
        http_response_code(500);
        echo 'Failed to send message.';
    }
} else {
    http_response_code(405);
    echo 'Method Not Allowed';
}
?>