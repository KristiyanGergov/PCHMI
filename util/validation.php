<?php
session_start();

$username =  "";
$password = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] != "POST")
{
    return;
}

function extract_registration_variables()
{
    $error = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = test_input($_POST["username"]);

        $password = hash("sha256", test_input($_POST["password"]));

        $email = test_input($_POST["email"]);
    }
    return [
        'username' => $username,
        'password' => $password,
        'email' => $email
    ];
}

function extract_login_variables()
{
    $error = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = test_input($_POST["username"]);

        $password = hash("sha256", test_input($_POST["password"]));
    }
    return [
        'username' => $username,
        'password' => $password
    ];
}

function extract_item_variables()
{
    $error = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = test_input($_POST["name"]);

        $description = ($_POST["description"]);

        $price = test_input($_POST["price"]);

        $available = isset($_POST["available"]) ? test_input($_POST["available"]) : false;

        $type = ($_POST["type"]);

        $user = ($_SESSION["user"]);
        
        $target_dir = "../pictures/";

        $str=rand(); 
        $result = md5($str); 

        $target_file = $target_dir . $result . time();
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false)
        {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file))
        {
            echo nl2br("Sorry, file already exists.\n");
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 500000)
        {
        echo nl2br("Sorry, your file is too large.\n");
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0)
        {
            echo nl2br("Sorry, your file was not uploaded.\n");
            $error = true;
        } else {
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo nl2br("Sorry, there was an error uploading your file.\n");
                $error = true;
            }
        }

    }
    return [
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'available' => $available,
        'type' => $type,
        'user' => $user,
        'image' => $target_file
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