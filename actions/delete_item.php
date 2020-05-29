<?php

include "../database/Database.php";

function delete_item($id)
{
    if ($_SERVER["REQUEST_METHOD"] != "POST")
    {
        return;
    }

    $database = new Database();
    $database->delete_item($id);

    header("Location: ../profile.php");
}

delete_item($_POST['id']);

?>