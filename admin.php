<?php require('includes/session.php'); ?>
<!DOCTYPE html>
<html lang="">
  <?php require('includes/head.php'); ?>
<body>
    <?php require('includes/header.php'); ?>
    <h1><?php echo "<h1> Velkominn " . $_SESSION['name'] . ". Hér er veðrið í dag.</h1>"; ?></h1>
    <br>
		<div id="map"></div>
    <div id="vedur">
        <h1 id="stadsetning"></h1>
        <h1 id="dagsetning"></h1>
        <h2 id="vedurupp"></h2>
        <h1 id="hiti"></h1>
        <div id="icon"></div>
    </div>
    <script src="java.js"></script>
</body>
</html>