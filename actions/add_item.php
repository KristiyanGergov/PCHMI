<?php

include "../util/validation.php";
include "../database/Database.php";
include "../entities/Item.php";

function init()
{
    if ($_SERVER["REQUEST_METHOD"] != "POST")
    {
        return;
    }

    $fields = extract_item_variables();
    $name = $fields['name'];
    $description = $fields['description'];
    $price = $fields['price'];
    $available = $fields['available'];
    $type = $fields['type'];
    $user = $fields['user'];
    $image = $fields['image'];

    $item = new Item($name, $description, $price, $available, $type, $user, $image);

    $database = new Database();
    $database->add_item($item);

    header("Location: ../view/profile.php");
}

init();

?>