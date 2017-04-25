<?php require('../includes/session.php'); ?>
<!DOCTYPE html>
<html lang="">
  <?php require('../includes/head.php'); ?>
<body>
    <?php require('../includes/header.php'); ?>
    <form action="../process/breytanafn.php" method="post"><br>
           Nýtt nafn<br>
        <input type="text" name="newname" required><br>
           Lykilorð<br>
        <input type="password" name="pass_ga" required><br>
        <input value="Accept" type="submit">
    </form>
</body>
</html>