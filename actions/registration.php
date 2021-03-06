<?php

include "../entities/User.php";
include "../util/validation.php";
include "../database/Database.php";

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

    $user = new User(
        $username,
        $password,
        $email
    );

    $database = new Database();
    $database->add_user($user);

    header("Location: ../view/login.php");
}

init();

?>