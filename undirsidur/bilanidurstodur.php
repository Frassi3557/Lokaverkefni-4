<?php
  if (isset($_POST['numer'])) {
      $bilnumer = $_POST['numer'];
    

  // slóð á API, sem skilar JSON
  $url ="http://apis.is/car?number=$bilnumer";          
  
  // JSON sótt úr API.
  $json = file_get_contents($url);

  // fáum php object 
  $json_object = json_decode($json);
  
  $subType = $json_object->results[0]->subType;
  $registeredAt = $json_object->results[0]->registeredAt;
  $year = substr($registeredAt, -4);
    
  echo $year;
  echo $subType;

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
<?php
  $sURL = "https://api.cognitive.microsoft.com/bing/v5.0/images/search?q=";
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $sURL); 
  curl_setopt($ch, CURLOPT_TIMEOUT, '1'); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: multipart/form-data',
    'Ocp-Apim-Subscription-Key: 54795abe8ca14ef899cfb5749f360d47'
  ));
  $content = curl_exec($ch);
  
  echo $content;
  
  
?>
</body>
  </html> 


