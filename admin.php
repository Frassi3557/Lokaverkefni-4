<?php require('includes/session.php'); ?>
<!DOCTYPE html>
<html lang="">
  <?php require('includes/head.php'); ?>
<body>
    <?php require('includes/header.php'); ?>
    <h1><?php echo "<h1> Velkominn " . $_SESSION['name'] . ". Hér er veðrið í dga.</h1>"; ?></h1>
    <br>
    <h1 class="stadsetning"></h1>
    <form action="process/signout.php" method="post">
        <input type="submit">
    </form>
    <script src="java.js"></script>
</body>
</html>