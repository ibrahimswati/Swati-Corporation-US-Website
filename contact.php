<?php


    $name = $_POST['name'];
    $v_email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $email_from = 'contact@swaticorporation.com';

    $email_subject = "Swati Corporation US";


    $email_body = "From: $name.\n
    Email: $v_email. \n
    Number: $number. \n
    Message: $message. \n";

    $to = "ibrahimswati@gmail.com";

    $headers = "From: $email_from \r \n";
    $headers = "Reply to: $v_email \r \n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>
