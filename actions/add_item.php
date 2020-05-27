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

    $fields = extract_item_variables();
    $name = $fields['name'];
    $description = $fields['description'];
    $price = $fields['price'];
    $type = $fields['type'];
    $user = $fields['user'];
    $image = $fields['image'];

    $item = new Item($name, $description, $price, $type, $user, $image);

    $database = new Database();
    $database->add_item($item);
}

init();

?>