<?php
session_start();
include "database/Database.php";
include "entities/Item.php";

$db = new Database();
$rows = $db->get_newest();
$items = [];
foreach ($rows as $row) {
    $items[] = new Item($row['name'], $row['description'], $row['price'], $row['available'], $row['type'], $row['user'], $row['image'], $row['id']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/body.css">
    <link rel="stylesheet" type="text/css" href="styles/navigation.css">
</head>
<body>

<?php include "view/header.php"; ?>
<?php include "view/topnavigation.html"; ?>

<hr style="margin-top: 20px">

<p class="heading" style="color: white; margin: auto; width: 18%; font-size: 25px">
    Our newest products<br><br>
</p>


<?php
include "actions/generate_item_list.php";
echo generate_item_rows($items);
?>

</body>
</html>
