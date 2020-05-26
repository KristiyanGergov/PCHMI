<?php

$username =  "";
$password = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] != "POST")
{
    return;
}

function extract_variables()
{
    $error = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = test_input($_POST["username"]);

        $password = hash("sha265", test_input($_POST["password"]));

        $email = test_input($_POST["email"]);
    }
    return [
        'username' => $username,
        'password' => $password,
        'email' => $email
    ];
}

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlentities($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

?>