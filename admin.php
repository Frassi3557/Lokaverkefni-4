<?php require('includes/session.php'); ?>
<!DOCTYPE html>
<html lang="">
  <?php require('includes/head.php'); ?>
<body>
    <?php require('includes/header.php'); ?>
    <h1><?php echo "<h1> Velkominn " . $_SESSION['name'] . ". Hér er umferðin og veðrið í dag.</h1>"; ?></h1>
    <br>
	<button id="reyStads">Reykjavík</button>
	<button id="akStads">Akureyri</button>
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