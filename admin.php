<?php require('includes/session.php'); ?>
<!DOCTYPE html>
<html lang="">
  <?php require('includes/head.php'); ?>
<body>
    <?php require('includes/header.php'); ?>
    <h1><?php echo "<h1> Velkominn " . $_SESSION['name'] . ".</h1><h2> Mailið þitt er " . $_SESSION['email'] . "</h2>"; ?></h1>
    <form action="process/signout.php" method="post">
        <input type="submit">
    </form>
</body>
</html>