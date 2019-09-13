<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$visitoremail = $_POST['email'];
$message = $_POST['message'];


$email_from = 'matthias.cartel@laposte.net';

$email_subject = "New mail";

$email_body = "User Name: $name. \n". 
                "User Email: $visitoremail.\n". 
                    "User message: $message.\n";

$to = "mcartel@protonmail.ch";

$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html?mailSend");

}
?>