<?php
    session_start();
unset($_SESSION["token"]);
unset($_SESSION["user"]);
if(!isset($_SESSION["token"])) {
    header("Location: ../index.php");
}
?>