<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $lastName = $_POST['last_name'];
    $subject = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];

    $mailTo = "info@forcleanhoods.com";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an e-mail from \n\nName: " .$name." " .$lastName. ". \nCompany Name: ".$company
        ."\nCity: ".$city .",".$state. "\nPhone: " .$phone ."\nEmail: " .$mailFrom .".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}

