<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "forms_methods.php";

// Transfer post to $form
$form = $_POST;
var_dump($form["form-type"]);

switch ($form["form-type"]) {
    case "membership":
        processMembershipForm($form);
        break;
    case "involve":
        processInvolveForm($form);
        break;

    default:

}

 ?>
