<?php
    session_start();

if(!isset($_SESSION["token"])) {
    header("Location: view/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/body.css">
    <link rel="stylesheet" type="text/css" href="styles/navigation.css">
    <link rel="stylesheet" type="text/css" href="styles/input.css">
</head>
<body>

<?php echo "<style>
#add {
    font-size: larger;
    color: black;
    background-color: #67ff67;
}
</style>";
?>
<?php include "view/header.php"; ?>
<?php include "view/topnavigation.html"; ?>

<br/>

<div class="row">
    <div class="column" style="background-color:#aaa;">
        <img src="pictures/aeon.png" alt="aeon">
    </div>

    <form action="actions/add_item.php" method="POST" enctype="multipart/form-data">
        <div class="column" style="text-align: center; background-color:#bbb;">
            <label for="productName"><b>Name of product</b></label>
            <input id="productName" type="text" placeholder="Enter Product name" name="name" required>

            <label for="description"><b>Description</b></label>
            <input id="description" type="text" placeholder="Enter product description" name="description" required>

            <label for="price"><b>Price for renting</b></label>
            <input id="price" type="text" placeholder="Enter Price for renting" name="price" required>

            <label for="available" class="available">Available for rent</label>
            <input id="available" type="checkbox" name="available">

            <label for="type">Choose a type:</label>

                <select name="type" id="type">
                <option value="shisha">Shisha</option>
                <option value="bowl">Bowl</option>
                <option value="service">Service</option>
                <option value="consumable">Consumable</option>
                </select>

            <input type="file"  class="field" name="image" required>
                <button type="submit">Add</button>
        </div>
    </form>
</div>

</body>
</html>