<?php
  if (isset($_POST['numer'])) {
      $bilnumer = $_POST['numer'];
    

  // slóð á API, sem skilar JSON
  $url ="http://apis.is/car?number=$bilnumer";          
  
  // JSON sótt úr API.
  $json = file_get_contents($url);

  // fáum php object 
  $json_object = json_decode($json);

  print_r($json_object);
  /*
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