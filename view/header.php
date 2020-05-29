<?php
    session_start();
?>

<div class="heading" style="size: 500px">
    <a href="index.php"><img src="pictures/aeon.png" alt="aeon" class="aeon"></a>
    <h1>SHISHA SHARE</h1>

</div>

<?php
if(isset($_SESSION["token"])) {
    echo '<a href="./view/logout.php"><h3 style="margin-right: 60px; float: right; color: white">Logout</h3></a>
    <a href="./profile.php"><h3 style="margin-right: 60px; float: right; color: white">Profile</h3></a>';
} else {
    echo  '<a href="./view/register.html"><h3 style="margin-right: 60px; float: right; color: white">Register</h3></a>
           <a href="./view/login.php"><h3 style="margin-right: 60px; float: right; color: white">Login</h3></a>';
}
?>

