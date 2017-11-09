<?php

// void fx()
/*
    This function takes no input and return nothing
    This function prints the content of styles/styles.css into the email template content
    This functions also print the style tag
*/
function includeStyling() {

    $stylePath = dirname(__FILE__) . "/styles/styles.css";
    $styles = file_get_contents($stylePath);

    return "<style>"  .  $styles  .  "</style>" ;
}

function buildMemberShipMessageContent($content) {
    $message = "<div id='message-container'>";
    $message .= "<h1>Bonjour</h1>,";
    $message .= "<strong>le message suivant tient à vous faire part d'une nouvelle demande de membre pour le groupe ALUMNI!</strong>";
    $message .= "<br>Les informations du nouveaux membre sont les suivantes:";
    $message .= "<ul>";
    $message .= "<li>".$content["firstname"]  . "   " . $content["lastname"]."</li>";
    $message .= "<li>"."Email : " . $content["email"]."</li>";
    $message .= "<li>"."Profession : " . $content["profession"]."</li>";
    $message .= "</ul>";
    $message .= "<h3>Merci de ne pas répondre à ce message.</h3>";
    $message .= "<h3>Ce message est généré par le système de mail de Artbox.</h3>";
    $message .= "</div>";

    return $message;
}


function buildInvolveMessageContent($content) {


    $message  = "<div id='message-container'>";
    $message .= "<h1 style=''>Bonjour</h1>,";
    $message .= "<strong>le message suivant tient à vous faire part d'une nouvelle demande d'implications pour le groupe ALUMNI!</strong>";
    $message .= "<br>Les informations de l'implication sont les suivantes:";
    $message .= "<ul>";
    $message .= "<li>".$content["firstname"]  . "   " . $content["lastname"]."</li>";
    $message .= "<li>"."Email : " . $content["email"]."</li>";
    $message .= "<li>"."Profession : " . $content["jobtitle"]. "chez " ."<strong> : ".$content["employer"] ."</strong></li>";
    $message .= "</ul>";
    $message .= "<h3>Merci de ne pas répondre à ce message.</h3>";
    $message .= "<h3>Ce message est généré par le système de mail de Artbox.</h3>";
    $message .= "</div>";

    return $message;
}


function buildQuestionMessageContent($content) {

    $message = "<div id='message-container'>";
    $message .= "<h1 style=''>Bonjour</h1>,";
    $message .= "<strong>le message suivant tient à vous faire part d'une nouvelle question pour le groupe ALUMNI!</strong>";
    $message .= "<br>Les informations de la questions sont les suivantes:";
    $message .= "<ul>";
    $message .= "<li>".$content["firstname"]  . "   " . $content["lastname"]."</li>";
    $message .= "<li>"."Email : " . $content["email"]."</li>";
    $message .= "</ul>";
    $message .= "<h4> Joignez" . $content["firstname"] . " " . $content["lastname"] . " au <a href='tel:". $content["phone"] ."'>" . $content["phone"] . "</a></h4>";
    $message .= "<h3>Merci de ne pas répondre à ce message.</h3>";
    $message .= "<h3>Ce message est généré par le système de mail de Artbox.</h3>";
    $message .= "</div>";
    includeStyling();

    return $message;
}

function buildSubscriptionMessage($content) {

    $message = "<div id='message-container'>";
    $message .= "<h1 style=''>Bonjour</h1>,";
    $message .= "Merci de vous êtres inscrit au groupe ALUMNI";
    $message .= "Pour valider votre inscription, veuillez cliquer";
    $message .= "<a href='". ROOT .  "/validate-user.php?token=" . $content["token"] ."'>ici.</a>";
    $message .= "</div>";
    $message .= includeStyling();

    return $message;
}
