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
    <a href="../index.php"><img style="width:15%" src="../pictures/aeon.png" alt="Avatar" class="avatar"></a>
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
        <label>
            <a href="register.html"><button class="reg_button" style="background-color:#434547">Register</button></a>
        </label>
    </div>
</form>

</body>
</html>
