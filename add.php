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
    <link rel="stylesheet" type="text/css" href="styles/checkbox.css">
    <link rel="stylesheet" type="text/css" href="styles/button.css">
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    $('#selectedImage')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
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

<div class="row" style="background-color:#aaa;">
    <div class="column">
        <img style="display:block;margin:auto; border: 3px solid #ddd;" id="selectedImage" src="pictures/plus.png" alt="plus">
    </div>

    <form action="actions/add_item.php" method="POST" enctype="multipart/form-data">
        <div>
            <div class="column">
                <label for="productName"><b>Name of product</b></label>
                <input id="productName" type="text" placeholder="Enter Product name" name="name" required>

                <label for="description"><b>Description</b></label>
                <input id="description" type="text" placeholder="Enter product description" name="description" required>

                <label for="price"><b>Price for renting</b></label>
                <input id="price" type="text" placeholder="Enter Price for renting" name="price" required>

                <label style="margin-top: 10px" class="checkboxContainer">Available for rent
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>

                <label style="margin-top: 10px;">
                    <span style="font-size: 22px;">Choose a type:</span>
                    <select style="font-size: 15px; margin-left: 10px" class="custom-select" name="type" id="type">
                        <option value="shisha">Shisha</option>
                        <option value="bowl">Bowl</option>
                        <option value="service">Service</option>
                        <option value="consumable">Consumable</option>
                    </select>
                </label>

                <input onchange="readURL(this);" style="margin-top: 20px" type="file" class="field" name="image"
                       required>
                <button style="margin-top: 20px" class="button" type="submit">Add</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>