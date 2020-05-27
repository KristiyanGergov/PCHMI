<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
<?php include "header.html"; ?>
<?php include "topnavigation.html"; ?>

<br/>

<div class="row">
    <div class="column" style="background-color:#aaa;">
        <img src="aeon.png" alt="aeon">
    </div>

    <div class="column" style="text-align: center; background-color:#bbb;">
        <label for="productName"><b>Name of product</b></label>
        <input id="productName" type="text" placeholder="Enter Product name" name="productName" required>

        <label for="psw"><b>Price for renting</b></label>
        <input id="psw" type="text" placeholder="Enter Price for renting" name="psw" required>

        <label for="available" class="available">Available for rent</label>
        <input id="available" type="checkbox">
    </div>
</div>

</body>
</html>