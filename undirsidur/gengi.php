<?php
  if (isset($_POST['krona'])) {
      $krona = $_POST['krona'];
    

  // slóð á API, sem skilar JSON
  $url ="http://apis.is/currency/arion";          
  
  // JSON sótt úr API.
  $json = file_get_contents($url);

  // Fæ PHP object
 $json_object = json_decode($json);
		/* 
  $valuetwo = $json_object->results[0]->value;
	$shortname = $json_object->results[0]->shortName;
	$longname = $json_object->results[0]->longName;
	$gengi = $valuetwo * $krona;*/
  }
	else{
		header("Location:http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/admin.php");
	}
?>

<!DOCTYPE html>
<html>
  <?php require('../includes/head.php'); 
        include('../includes/header.php');
  ?>
  
	<form action="gengi.php" method="post">
        <label>kr</label>
        <input type="text" name="krona" required>
        <input type="submit" value="Finna">
  </form>
  <div>
		<!-- Skrifa út upplýsingar um bifreið -->
      <?php foreach ($json_object->results as $valueone): ?>
			<?php
				$margf = $valueone->value;
				$margftvo = $krona / $margf;
				$gengiut = substr($margftvo, 0, 4)
			?>
				<hr>
				<div class="gengiDiv">
					<h1><?php echo $valueone->shortName . ": " . $valueone->longName ?></h1>
					<h1>Krónur: <?php echo $krona ?></h1>
					<h1>Value: <?php echo $valueone->value ?></h1>
					<h1>Gengi: <?php echo $gengiut ?></h1>
				</div>
				<br><hr>
      <?php endforeach; ?> 
  </div>
  
</body>
  </html> 