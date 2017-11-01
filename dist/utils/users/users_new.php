<?php
require "../security/crypt.php";
require "../security/password.php";
require "../security/tokens.php";
require "../emails/email_methods.php";

/*
    This function handle the db entry for a temporary db entry
    This function handle
*/
function initNewUser($form, $db) {

    var_dump($form);

    /*
        For processing the SQL request let's build our data
    */

    // Build datas for query
    $firstname = $form["firstname"];
    $lastname = $form["lastname"];
    $age = $form["age"];
    $email = $form["email"];
    $profession = $form["profession"];
    $email = $form["email"];
    $username = $form["username"];
    $password = $form["password"];

    // Let's encrypt th password
    $password = encryptPassword($password);

    // Populate a token
    $validationToken  = populateToken($x["alpha-numeric"]);
    var_dump($validationToken);


    // Let's persist into our database
    $sql = "INSERT INTO ndl_pending_users (firstname, lastname, age, profession, email, username, password, validation_token)
    VALUES ('$firstname', '$lastname', $age, '$profession', '$email', '$username', '$password', '$validationToken')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    // Send email of new user
    // TODO: Create a function for sending email to the user for account validation

}
