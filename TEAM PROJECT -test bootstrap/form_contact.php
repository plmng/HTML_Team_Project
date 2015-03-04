<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$to = "plmng13@gmail.com";
$subject = "New Message";

mail ($to, $subject, $msg, "From: " . $name);
echo "Your message has been sent";

?>