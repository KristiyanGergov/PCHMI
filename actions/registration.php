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

    $fields = extract_registration_variables();
    $username = $fields['username'];
    $password = $fields['password'];
    $email = $fields['email'];

    echo $username;
    echo $password;

    $user = new User(
        $username,
        $password,
        $email
    );
    
    $database = new Database();
    $database->add_user($user);
}

init();

?>