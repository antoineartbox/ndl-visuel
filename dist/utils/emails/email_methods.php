<?php
require '../../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require "emails_settings/general_settings.php";
require "templates/emails_template.php";
require "CONST.php";


function sendNewUserMail($messageContent, $newUserEmail) {
    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    $mail->isSMTP();


    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "antoinefortin1995@gmail.com";
    $mail->Password = "abletonreasonfl";

    $mail->setFrom(SENDER, 'Antoine Fortin');
    $mail->addReplyTo(REPLYER, 'Tony prod');

    $emails = unserialize (RECEIVERS);


    //Set who the message is to be sent to

    $mail->addAddress($newUserEmail, 'user');


    // Mail Subject
    $mail->Subject = "Valider votre inscription au groupe ALUMNI";
    $mail->AltBody = "Valider votre inscription au groupe ALUMNI";

    $mail->Body = $messageContent;

    //send the message, check for errors
        logEmailMessage(array($mail->Subject));
        if (!$mail->send()) {



        } else {

        }

}

function sendMemberShipMessage($messageContent) {

    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->SMTPDebug = 2;

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "antoinefortin1995@gmail.com";
    $mail->Password = "abletonreasonfl";

    $mail->setFrom(SENDER, 'Antoine Fortin');
    $mail->addReplyTo(REPLYER, 'Tony prod');

    $emails = unserialize (RECEIVERS);


    //Set who the message is to be sent to
    foreach($emails as $key => $email) {
        $mail->addAddress($email, 'user');
    }

    // Mail Subject
    $mail->Subject = "Nouvelle demande de membre ALUMNI";
    $mail->AltBody = "Nouvelle demande de membre ALUMNI";

    $mail->Body = $messageContent;

    //send the message, check for errors
        logEmailMessage(array($mail->Subject));
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;

        } else {

        }
        echo "<script>location.href='../../';</script>";

}

function sendInvolveMessage($messageContent) {

    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    $mail->isSMTP();

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "antoinefortin1995@gmail.com";
    $mail->Password = "abletonreasonfl";

    $mail->setFrom(SENDER, 'Antoine Fortin');
    $mail->addReplyTo(REPLYER, 'Tony prod');

    $emails = unserialize (RECEIVERS);


    //Set who the message is to be sent to
    foreach($emails as $key => $email) {
        $mail->addAddress($email, 'user');
    }

    // Mail Subject
    $mail->Subject = "Nouvelle demande d'implication ALUMNI";
    $mail->AltBody = "Nouvelle demande d'implication ALUMNI";

    $mail->Body = $messageContent;

    //send the message, check for errors
    logEmailMessage(array($mail->Subject));
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;

    } else {
    	
    }
    // echo "<script>location.href='../../';</script>";

}

function sendQuestionMessage($messageContent) {
    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    $mail->isSMTP();

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "antoinefortin1995@gmail.com";
    $mail->Password = "abletonreasonfl";

    $mail->setFrom(SENDER, 'Antoine Fortin');
    $mail->addReplyTo(REPLYER, 'Tony prod');

    $emails = unserialize (RECEIVERS);


    //Set who the message is to be sent to
    foreach($emails as $key => $email) {
        $mail->addAddress($email, 'user');
    }

    // Mail Subject
    $mail->Subject = "Nouvelle Question ALUMNI";
    $mail->AltBody = "Nouvelle Question ALUMNI";

    $mail->Body = $messageContent;

    //send the message, check for errors
    logEmailMessage(array($mail->Subject));
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;

    } else {

    }

}

/*
    Void
    Input->Array

    *This function receive an array of infos and print them into the email logger
*/
function logEmailMessage($logContent) {

    // Stack _tmp from logContent;
    $messageTitle = $logContent[0];

    // Build Message
    $logMessage = "Email sent at  :  " . date('l jS \of F Y h:i:s A');
    $logMessage .= "       ----      Sent from  " . SENDER;
    $logMessage .= "       ----      To  " . unserializeEmail();
    $logMessage .= "       ----      Message  Title" . $messageTitle . "\r\n";

    // Write inside file from stream
    $my_file = '../emails/emails_log/emails_log.txt';
    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    $data = $logMessage;
    fwrite($handle, $data);

}

function unserializeEmail() {
    $emails = unserialize (RECEIVERS);
    $processedEmail = "";
    foreach ($emails as $key => $email) {
        $processedEmail .= $email;
    }
    return $processedEmail;
}
