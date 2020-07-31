<?php
/* Decode incoming JSON data so php can read it */
$_POST = json_decode(file_get_contents('php://input'), true);
/* Define variable to each POST request object */
$link = $_POST['link'];
$name = $_POST['name'];
$version = $_POST['version'];
/* Prepare data to be sent via email */
$to = 'put target email here';
$subject = "New version of $name is available for download.";
$message = 
<<<EOF
<html><body>New version <b>($version)</b> is available, it will be downloaded and installed. <br> <br> Click <a href="$link">here</a> to learn more about new version. <br> <br> <i>esp8266 notification</i></body></html>
EOF;
$headers = "From: notification@esp8266.home\r\n";
$headers .= "Reply-To: notification@esp8266.home\r\n";
$headers .= "X-Mailer: PHP/".phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
/* Send mail */
mail($to, $subject, $message, $headers);
?>