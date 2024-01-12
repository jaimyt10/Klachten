<!doctype html>
<html>
<head>
    <title>Create Accounts</title>
</head>
<body>
<?php require_once "nav.php" ?>

<h1>Create Accounts</h1>

<?php
require "Accounts.php";

$fullname=$_POST["fullname"];
$password=$_POST["password"];
$email=$_POST["email"];


$account = new Accounts($fullname, password_hash($password, PASSWORD_DEFAULT), $email);
$account->Create();
$_SESSION['fullname'] = $fullname;
header("location:index.php");
?>
</body>
</html>
