<?php
    if(!empty($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $toEmail = "shteamdev@gmail.com";
        $mailHeaders = "From: " . $name . " <" . $email . ">\r\n";
        if(mail($toEmail, $subject, $message, $mailHeaders)) {
            header("Location: index.html");
        }
    }
?>