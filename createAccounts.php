<?php

require_once "dbConnect.php";


?>


<!doctype html>
<html>
<head>
    <title>Create gast</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<h1>Registreren</h1>

<div id="form">
<form  action="createAccounts2.php" method="post">
    <label for="fullname">Naam op account:</label>
    <input type="text" id = "fullname" name="fullname"><br/>

    <label for="password"> Accounts password:</label>
    <input type="password" id = "password" name="password"><br/>

    <label for="email">Accounts mail:</label>
    <input type="email" id="email" name="email"><br/>

    <input type="submit">
</form>
</div>
</body>
</html>