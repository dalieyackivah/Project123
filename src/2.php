<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = "New message from $name";
$body = "$name sent you a new message:\n\n$message";
mail($email, $subject, $body);
echo "Message sent!";
?>