<?php
@name = $_POST['name'];
@visitor_email = $_POST['email'];
@subject = $_POST['subject'];
@message = $_POST['message'];

$email-from = 'info@yourwebsite.com';

$email_subject = 'new form submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "User subject: $subject.\n".
                 "User message: $message.\n".;

$to = 'sina.moshref@gmail.com';

@headers = "from: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n;


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>