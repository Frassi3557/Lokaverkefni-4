<?php
  if (isset($_POST['numer'])) {
      $bilnumer = $_POST['numer'];
    

  // slóð á API, sem skilar JSON
  $url ="http://apis.is/car?number=$bilnumer";          
  
  // JSON sótt úr API.
  $json = file_get_contents($url);

  // fáum php object 
  $json_object = json_decode($json);

  /*
  print_r($json_object);
   http://apis.is/car?number=OST00
    stdClass Object ( 
      [results] => Array (
        [0] => stdClass Object ( 
        [type] => MITSUBISHI - PAJERO (Svartur) 
        [subType] => PAJERO [color] => Svartur 
        [registryNumber] => OST00 
        [number] => OST00 
        [factoryNumber] => JMBLYV98WFJ402346
        [registeredAt] => 15.01.2016
        [pollution] => 224 g/km 
        [weight] => 2310 kg 
        [status] => Í lagi 
        [nextCheck] => 01.10.2020 
        ) 
      ) 
    )
  */
  }
?>

<!DOCTYPE html>
<html>
  <?php require('../includes/head.php'); ?>
<body>
  <div>
<?php foreach ($json_object->results as $value): ?>
    <p id="type"><?php echo $value->type ?></p>
    <p id="subType"><?php echo $value->subType ?></p>
    <p id="registryNumber"><?php echo $value->registryNumber ?></p>
    <p id="number"><?php echo $value->number ?></p>
    <p id="factoryNumber"><?php echo $value->factoryNumber ?></p>
    <p id="registeredAt"><?php echo $value->registeredAt ?></p>
    <p id="pollution"><?php echo $value->pollution ?></p>
    <p id="weight"><?php echo $value->weight ?></p>
    <p id="status"><?php echo $value->status ?></p>
    <p id="nextcheck"><?php echo $value->nextCheck ?></p>
<?php endforeach; ?>  
  </div>
</body>
  </html> 