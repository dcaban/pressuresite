<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $lastName = $_POST['last_name'];
    $subject = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "info@forcleanhoods.com";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an e-mail from " .$name." " .$lastName .".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}

