<?php require('includes/session.php'); ?>
<!DOCTYPE html>
<html lang="">
  <?php require('includes/head.php'); ?>
    <?php require('includes/header.php'); ?>
    <h1><?php echo "<h1> Velkominn " . $_SESSION['name'] . ". Hér er umferðin og veðrið í dag.</h1>"; ?></h1>
    <p id="welcometext"></p>
    <table id="GeoResults"></table>
    <br>
	<button class="stadTakki" id="reyStads">Umferð í Reykjavík</button>
	<button class="stadTakki" id="akStads">Umferð á Akureyri</button>
	<button class="stadTakki" id="myStads">Mitt Location(virkar ekki chrome)</button>
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