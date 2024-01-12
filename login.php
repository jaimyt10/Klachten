<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form action="authenticate.php" method="post" >
        <label for="email">
        </label>
        <input type="email" name="email" placeholder="Email" id="email" required><br>
        <label for="password">
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>

        <br>

        <input type="submit" name="login">

    </form>
    <p>Need to create an account? <a href="createAccounts.php">Register here</a>.</p>
</div>


</body>
</html>
<?php


require "dbConnect.php";
?>
