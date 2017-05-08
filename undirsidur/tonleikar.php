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
        <p id="type">Tegund: <?php echo $value->eventDateName ?></p>
				<br>
      <?php endforeach; ?>  
  </div>
  
</body>
  </html> 