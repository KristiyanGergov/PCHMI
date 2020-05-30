<?php
    session_start();
    include "database/Database.php";
    include "entities/Item.php";
    include "actions/generate_product_html.php";

    $id = $_GET['id'];

    $db = new Database();
    $row = $db->get_item($id);
    $item = new Item($row['name'], $row['description'], $row['price'], $row['available'], $row['type'], $row['user'], $row['image'], $id);
    $deletable = false;
    if(isset($_SESSION["user"])) {
      $logged_user_id = $db->user_id_from_name($_SESSION["user"]); 
      $deletable = ($logged_user_id == $item->user);
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

<hr style="margin-top: 20px">

<?php
    echo generate_product_html($item, $deletable);
?>

</body>
</html>
