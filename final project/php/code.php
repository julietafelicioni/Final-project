<?php
$to = "julietafelicioni@gmil.com";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$comments = $_POST['comments'];

$message = "
<html>
<head>
<title>Contact Form</title>
</head>

<body>
<h1>Contacto information from the website</h1>
<p>User name: $name </p> 
<p>Email: $email </p> 
<p>Age: $age </p> 
<p>Comments: $comments </p> 

</body>
</html>";
 echo 'Thanks';
mail($to, $subject, $message, $headers);
?>
