<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <link rel="stylesheet" type="text/css" href="../styles/input.css">
</head>
<body>

<div class="heading">
    <h1>SHISHA SHARE</h1>
    <h2>Your online shisha world</h2>
</div>

<div class="imgcontainer">
    <img src="../pictures/avatar.jpg" alt="Avatar" class="avatar">
</div>


<form action="../actions/login.php" method="POST">

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>
</form>
<?php
    echo  '<a href="./view/register.html"><h3 style="margin-right: 60px; float: right; color: white">Register</h3></a>';
?>

</body>
</html>
