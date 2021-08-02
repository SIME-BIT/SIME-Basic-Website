<?php
    $name = $_POST['name'];
    $visitor_mail = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = "sime.bitmesra@gmail.com";
    $email_subject = "Subject : $subject";
    $email_body = "Message : $message.\n".
                        "From : $name.\n".
                        "Contact Number : $number.\n".
                        "E-mail : $visitor_mail";
    $to = "sime@bitmesra.ac.in";
    $headers = "From : $email_from \r\n";
    $headers .= "Reply to : $visitor_mail \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location : contact.html")
?>