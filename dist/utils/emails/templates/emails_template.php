<?php

function includeGenericStyling() {

    $style = file_get_content("styles/style.css");
}
function buildMemberShipMessageContent($content) {
    $message  = "<h1>Bonjour</h1>,";
    $message .= "<strong>le message suivant tient à vous faire part d'une nouvelle demande de membre pour le groupe ALUMNI!</strong>";
    $message .= "<br>Les informations du nouveaux membre sont les suivantes:";
    $message .= "<ul>";
    $message .= "<li>".$content["firstname"]  . "   " . $content["lastname"]."</li>";
    $message .= "<li>"."Email : " . $content["email"]."</li>";
    $message .= "<li>"."Profession : " . $content["profession"]."</li>";
    $message .= "</ul>";
    $message .= "<h3>Merci de ne pas répondre à ce message.</h3>";
    $message .= "<h3>Ce message est généré par le système de mail de Artbox.</h3>";
    return $message;
}


function buildInvolveMessageContent($content) {

    $message  = "<h1 style=''>Bonjour</h1>,";
    $message .= "<strong>le message suivant tient à vous faire part d'une nouvelle demande d'implications pour le groupe ALUMNI!</strong>";
    $message .= "<br>Les informations de l'implication sont les suivantes:";
    $message .= "<ul>";
    $message .= "<li>".$content["firstname"]  . "   " . $content["lastname"]."</li>";
    $message .= "<li>"."Email : " . $content["email"]."</li>";
    $message .= "<li>"."Profession : " . $content["jobtitle"]. "chez " ."<strong>".$content["employer"] ."</strong></li>";
    $message .= "</ul>";
    $message .= "<h3>Merci de ne pas répondre à ce message.</h3>";
    $message .= "<h3>Ce message est généré par le système de mail de Artbox.</h3>";

    return $message;
}
