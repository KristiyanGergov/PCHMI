<?php
    session_start();
    include "database/Database.php";
    include "entities/Item.php";

    $db = new Database();
    $rows = $db->get_user_items($_SESSION["user"]);
    $items = [];
    foreach ($rows as $row) {
        $items[] = new Item($row['name'], $row['description'], $row['price'], $row['available'], $row['type'], $row['user'], $row['image']);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/body.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/navigation.css">
</head>
<body>

<?php include "view/header.php";?>
<?php include "view/topnavigation.html";?>

<div class="heading">
    <h1>SHISHA SHARE</h1>
    <h2>Your online shisha world</h2>
</div>

    <div class="container">
        <h2 class="greeting">Hello, <?echo $_SESSION["user"]?></h2>
        <h3></h3>

        <br/>
        <div class="orders">
            <h2>Your items: </h2>

                <?php
                    include "actions/generate_item_list.php";
                    echo generate_item_rows($items);
                ?>
        </div>
    </div>

</body>
</html>