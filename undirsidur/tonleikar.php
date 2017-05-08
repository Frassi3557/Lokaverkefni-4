<?php
    

  // slóð á API, sem skilar JSON
  $url ="http://apis.is/concerts";          
  
  // JSON sótt úr API.
  $json = file_get_contents($url);

  // fáum php object 
  $json_object = json_decode($json);
echo "lol";
?>

<!DOCTYPE html>
<html>
  <?php require('../includes/head.php'); 
        include('../includes/header.php');
  ?>
  <div>
      <?php foreach ($json_object->results as $value): ?>
				<div class="group">
					<h1>Event: <?php echo $value->eventDateName ?></h1>
					<h2>Flytjendur: <?php echo $value->userGroupName ?></h1>
						<h2>Nafn á viðburði: <?php echo $value->name ?></h1>
						<h1>Staður: <?php echo $value->eventHallName ?></h1>
							<img src="<?php echo $value->imageSource ?>">
				</div>
				<br>
      <?php endforeach; ?>  
  </div>
  
</body>
  </html> 