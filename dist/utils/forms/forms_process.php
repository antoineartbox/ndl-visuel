<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "forms_methods.php";

// Transfer post to $form
$form = $_POST;


switch ($form["form-type"]) {
    case "membership_new_user":
        processNewUser($form);
        break;

    case "membership":
        processMembershipForm($form);
        break;

    case "involve":
        processInvolveForm($form);
        break;

    case "question":

        processQuestionForms($form);
        break;
    default:

}

 ?>
