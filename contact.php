<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $txt = $_POST['message'];

    $to = 'mcartel@protonmail.ch';
    $subject = 'MattCrea Website Form';
    $message="Name: ".$name."\n"."Message: ".$txt."\n";
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers))
    {
        console.info("Mail bien envoyé");
    }
}

?>