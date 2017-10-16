<?php
    $email = $_GET["email"];
    $to = "appefly@gmail.com";
    $subject = "Customer contacted you.";
    $headers = "From: $email\n";
    $message = "A visitor to your site has sent the following email address to be added to your mailing list.\n

    Email Address: $email\n";

    $user = "$email";
    $usersubject = "Thank You";
    $userheaders = "From: AcadePro\n";
    $usermessage = "Thank you for contacting us! We'll revert back as soon as possible.";
    mail($to,$subject,$message,$headers);
    mail($user,$usersubject,$usermessage,$userheaders);

    header('Location: ../thankyou.html');
?>