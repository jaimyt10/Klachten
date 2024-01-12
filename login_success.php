<?php
//login_success.php
session_start();
if(isset($_SESSION["mail"]))
{
    echo '<h3>Login Success, Welcome - '.$_SESSION["mail"].'</h3>';
    echo '<br /><br /><a href="logout.php">Logout</a>';
}
else
{
    header("location:index.php");
}
?>