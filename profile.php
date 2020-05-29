<!DOCTYPE html>
<?php
session_start();
include "database/Database.php";
include "entities/Item.php";

$db = new Database();
$rows = $db->get_user_items($_SESSION["user"]);
$items = [];
foreach ($rows as $row) {
    $items[] = new Item($row['name'], $row['description'], $row['price'], $row['available'], $row['type'], $row['user'], $row['image'], $row['id']);
}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/body.css">
    <link rel="stylesheet" type="text/css" href="styles/navigation.css">
    <style>
        .container {
            padding: 16px;
            width: 40%;
            margin: auto;
            background-color: gray;
            border-radius: 25px;
        }
    </style>
</head>
<body>

<?php include "view/header.php"; ?>
<?php include "view/topnavigation.html"; ?>

<div class="heading" style="color: white; margin: auto; width: 20%">
    <h2 style="display: block">Your online shisha world</h2>
    <br/><br/>
</div>

<div class="container">
    <h2 class="greeting">Hello, <? echo $_SESSION["user"] ?></h2>
    <div class="orders">
        <?php
        include "actions/generate_item_list.php";
        if (count($items) != 0) {
            echo "<h2>Your items: </h2>";
            echo generate_item_rows($items);
        } else {
            echo '<a href="add.php"><h2>You have no items.. want to add some?<h2></a>';
        }
        ?>
    </div>
</div>

</body>
</html>