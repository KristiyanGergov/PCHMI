<?php

include "../database/Database.php";

function delete_item($id)
{
    if ($_SERVER["REQUEST_METHOD"] != "DELETE")
    {
        return;
    }

    $database = new Database();
    $database->delete_item($id);

    header("Location: ../view/profile.php");
}

delete_item($_DELETE['id']);

?>