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

    $fields = extract_login_variables();
    $username = $fields['username'];
    $password = $fields['password'];

    $database = new Database();
    $hash = $database->get_pass_from_user($username);

    if($hash != $password) {
        echo "Enter correct password, ve mindil";
        return;
    }
    $sessionID = "lalalalalalla";
    $_SESSION["token"] = $sessionID;
    echo $_SESSION["token"];
    echo '<a href="../index.html">back!</a>';
    header("Location: ../index.php");
}

init();

?>