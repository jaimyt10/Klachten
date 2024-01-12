<!DOCTYPE html>
<html>
  <head>
    <title>Change Password Form</title>
  </head>
  <body>
  <?php require_once "nav.php"?>

  <h2>Change Password Form</h2>
    <form action="changepassword.php" method="post">
      <label for="current_password">Current Password:</label>
      <input type="password" id="current_password" name="current_password" required><br><br>
      
      <label for="new_password">New Password:</label>
      <input type="password" id="new_password" name="new_password" required><br><br>
      
      <label for="confirm_password">Confirm New Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required><br><br>
      
      <input type="submit" value="Change Password">
    </form>
  </body>
</html>
<?php
        require "dbConnect.php";
?>