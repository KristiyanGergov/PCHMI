<?php
    session_start();
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
<?php
if(!empty($_SESSION["token"])) {
    echo $_SESSION["token"];
    echo "lalalalal";
    echo '<div class="heading"><h1>HAHAHHA</h1></div>';
}
?>


<?php echo "<style>
#shisha {
    font-size: larger;
    color: black;
    background-color: green;
}
</style>";
?>
<?php include "header.html";?>
<?php include "topnavigation.html";?>

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

<div class="row">
    <div class="column" style="background-color:#aaa;">
        <img src="aeon.png" alt="aeon">
        <div class="name">Name of product</div>
        <div class="price">Price of product</div>
    </div>
    <div class="column" style="background-color:#bbb;">
        <img src="aeon.png" alt="aeon">
        <div class="name">Name of product</div>
        <div class="price">Price of product</div>
    </div>
    <div class="column" style="background-color:#ccc;">
        <img src="aeon.png" alt="aeon">
        <div class="name">Name of product</div>
        <div class="price">Price of product</div>
    </div>
    <div class="column" style="background-color:#ccc;">
        <img src="aeon.png" alt="aeon">
        <div class="name">Name of product</div>
        <div class="price">Price of product</div>
    </div>
</div>

</body>
</html>
