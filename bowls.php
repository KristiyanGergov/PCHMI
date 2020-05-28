<?php
    session_start();
    // include $_SERVER['DOCUMENT_ROOT'] . "/PCHMI/database";
    include "database/Database.php";
    $db = new Database();
    $rows = $db->get_items("shisha", 1);
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

<?php echo "<style>
#bowls {
    font-size: larger;
    color: black;
    background-color: #67ff67;
}
</style>";
?>
<?php include "view/header.php";?>
<?php include "view/topnavigation.html";?>

<hr style="margin-top: 20px">

<div class="pagination">
    <a>Page: </a>
    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a href="#" class="active">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
</div>

<?php
    include "entities/Item.php";
    include "actions/generate_item_list.php";

    $items = [];
    foreach ($rows as $row) {
        $items[] = new Item($row['name'], $row['description'], $row['price'], $row['available'], $row['type'], $row['user'], $row['image']);
    }

    echo generate_item_rows($items);
?>

</body>
</html>
