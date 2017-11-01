<?php

/*
    This file contains all related infos with password

*/

function encryptPassword($passwordEntry) {
    return password_hash($passwordEntry, PASSWORD_DEFAULT);
}

function verifyPassword($passwordEntry, $hash) {
    if (password_verify($passwordEntry, $hash)) {
        echo "Pass Fits";
        return true;
    } else {
        echo "Bummer";
        return false;
    }
}

 ?>
