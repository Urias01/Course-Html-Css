<?php

if(isset($_POST['name']))
$name = $_POST['name'];
if(isset($_POST['email']))
$email = $_POST['email'];

$content = "From: $name";
$recipient = "uriasluis64@gmail.com";
$mailHeader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailHeader) or die("Error sending");
echo "Email sent!";

?>