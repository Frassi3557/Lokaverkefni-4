<?php require('../includes/session.php'); ?>
<?php
   
  // slóð á API, sem skilar JSON
  $url ="http://apis.is/concerts";          
  
  // JSON sótt úr API.
  $json = file_get_contents($url);

  // fáum php object 
  $json_object = json_decode($json);

	$dateOfShow = $json_object->results[0]->dateOfShow;
  $dags = substr($dateOfShow, 0, -9);
	$klukk = substr($dateOfShow, 11, -3);
	$fyrstutveir = substr($dateOfShow, 8, 2);
	$manudur = substr($dateOfShow, 5, 2);
	$tvothus = substr($dateOfShow, 0, 4);
	$dagsetninar = $fyrstutveir."/".$manudur."/" .$tvothus;
?>

<!DOCTYPE html>
<html>
  <?php 
        include('../includes/header.php');
  ?>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tónleikar</title>
    <link rel="stylesheet" href="../style.css">
</head>
      <?php foreach ($json_object->results as $value): ?>
				<div class="tonleikarDiv">
					<h1>Event: <?php echo $value->eventDateName ?></h1>
					<h1>Dags: <?php echo $dagsetninar ?></h1>
					<h1>Klukkan: <?php echo $klukk ?></h1>
					<h2>Flytjendur: <?php echo $value->userGroupName ?></h1>
					<h2>Nafn á viðburði: <?php echo $value->name ?></h1>
					<h1>Staður: <?php echo $value->eventHallName ?></h1>
					<img src="<?php echo $value->imageSource ?>">
				</div>
				<br>
      <?php endforeach; ?>  
  
</body>
  </html> 