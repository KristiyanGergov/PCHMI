<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
</head>
<body>
<?php
    if(!empty($_SESSION["token"])) {
        echo $_SESSION["token"];
        echo "lalalalal";
        echo '<div class="heading"><h1>HAHAHHA</h1></div>';
    }
?>
<div class="heading" style="size: 500px">
    <img src="aeon.png" alt="aeon" class="aeon">
    <h1>SHISHA SHARE</h1>
</div>

<a href="./pages/login.php"><h3 style="margin-right: 60px; float: right; color: white">Login</h3></a>
<a href="./pages/register.html"><h3 style="margin-right: 60px; float: right; color: white">Register</h3></a>

<br/>
<div class="topnav">
    <a class="active" href="#shisha">Shisha</a>
    <a href="#cups">Cups</a>
    <a href="#consumables">Consumables</a>
    <a href="#services">Services</a>
    <a href="#add">Add</a>
</div>

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
