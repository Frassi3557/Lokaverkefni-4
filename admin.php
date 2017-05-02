<?php require('includes/session.php'); ?>
<!DOCTYPE html>
<html lang="">
  <?php require('includes/head.php'); ?>
<body>
    <?php require('includes/header.php'); ?>
    <h1><?php echo "<h1> Velkominn " . $_SESSION['name'] . ". Hér er veðrið í dag.</h1>"; ?></h1>
    <br>
    <div class="vedur">
        <h1 id="stadsetning"></h1>
        <h2 id="dagsetning"></h2>
    </div>
    <form action="process/signout.php" method="post">
        <input type="submit">
    </form>
    <script src="java.js"></script>
</body>
</html>