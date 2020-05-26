<?php

include "./User.php";
include "./validation.php";
include "./Database.php";

function init()
{
    if ($_SERVER["REQUEST_METHOD"] != "POST")
    {
        return;
    }

    $fields = extract_login_variables();
    $username = $fields['username'];
    $password = $fields['password'];
    
    $database = new Database();
    $hash = $database->get_pass_from_user($username);

    if($hash != $password) {
        echo "Enter correct password, ve mindil";
        return;
    }
    echo "Brao vutre si";
}

init();

?>