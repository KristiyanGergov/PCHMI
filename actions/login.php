<?php
session_start();

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
        echo "<script>
        alert('Wrong username or password');
        window.location.href=' ../view/login.php';
        </script>";
        return;
    }

    $_SESSION["token"] = $sessionID;
    $_SESSION["user"] = $username;
    header("Location: ../index.php");
}

init();

?>