<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_subject = $_POST['subject'];
    $message = $_POST['message'];


    $email_from = $visitor_email;
    
    $email_subject = $visitor_subject;

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Subject: $visitor_subject.\n".
                            "User Message: $message.\n";
    
    $to = "mohamed@afify.dev";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>