<?php
  if (isset($_POST['numer'])) {
      $bilnumer = $_POST['numer'];
    

  // slóð á API, sem skilar JSON
  $url ="http://apis.is/car?number=$bilnumer";          
  
  // JSON sótt úr API.
  $json = file_get_contents($url);

  // fáum php object 
  $json_object = json_decode($json);
  $propertyName = key(get_object_vars($json_object));
  if($propertyName != "results") {
      header("Location:bilaleit.php");
      exit;
  }
    
  else {
  //echo $propertyName; -> results / error
  $type = $json_object->results[0]->type;
  $type = preg_replace("/\([^)]+\)/","",$type);
  $type = str_replace(' ', '', $type);
  $registeredAt = $json_object->results[0]->registeredAt;
  $year = substr($registeredAt, -4);
    
  /*
  print_r($json_object);
   http://apis.is/car?number=OST00
    stdClass Object ( 
      [results] => Array (
        [0] => stdClass Object ( 
        [type] => MITSUBISHI - PAJERO (Svartur) 
        [subType] => PAJERO 
        [color] => Svartur 
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
    
    
    
    stdClass Object (
      [_type] => Images 
      [instrumentation] =>stdClass Object (
        [pageLoadPingUrl] => https://www.bingapis.com/api/ping/pageload?IG=1D144B176842402DAF35FE2FAC6365BA&CID=3303C2B9B6A761540A5EC8C8B74060E9&Type=Event.CPT&DATA=0 )
        [webSearchUrl] => https://www.bing.com/cr?IG=1D144B176842402DAF35FE2FAC6365BA&CID=3303C2B9B6A761540A5EC8C8B74060E9&rd=1&h=KBOVHi0UEz5E_dgIqPZm8H843bUxdrd4mebmVYWOl8s&v=1&r=https%3a%2f%2fwww.bing.com%2fimages%2fsearch%3fq%3d2016%2520PAJERO%26FORM%3dOIIARP&p=DevEx,5228.1 
        [totalEstimatedMatches] => 916 
        [value] => Array ( 
          [0] => stdClass Object (
          [name] => 2016 Mitsubishi Pajero Sport - Picture 638840 | truck review @ Top ... 
          [webSearchUrl] => https://www.bing.com/cr?IG=1D144B176842402DAF35FE2FAC6365BA&CID=3303C2B9B6A761540A5EC8C8B74060E9&rd=1&h=X-QlfSkD683mAPFOg9N5yyxa-eHUV3HcPfSwdL8pyIQ&v=1&r=https%3a%2f%2fwww.bing.com%2fimages%2fsearch%3fview%3ddetailv2%26FORM%3dOIIRPO%26q%3d2016%2bPAJERO%26id%3dEBC5C1ABE6449EB57766D7E09A6A0170C759A92C%26simid%3d608010733096404862&p=DevEx,5006.1 
          [thumbnailUrl] => https://tse2.mm.bing.net/th?id=OIP.xWxDXTGSJvgLd3D7A9Zf3QEsDI&pid=Api
          [datePublished] => 2017-03-16T10:35:00 
          [contentUrl] => http://www.bing.com/cr?IG=1D144B176842402DAF35FE2FAC6365BA&CID=3303C2B9B6A761540A5EC8C8B74060E9&rd=1&h=8YFuuwaYnGHsn-uca4lLG4EpGAK7g1clkPZxELiyV3E&v=1&r=http%3a%2f%2fpictures.topspeed.com%2fIMG%2fcrop%2f201508%2fmitsubishi-pajero-sp-22_1600x0w.jpg&p=DevEx,5008.1 
  */  
?>

<!DOCTYPE html>
<html>
  <?php require('../includes/head.php'); 
        include('../includes/header.php');
  ?>
<body>
  <form action="bilanidurstodur.php" method="post">
        <label>Skráningarnr.</label>
        <input type="text" name="numer" required>
        <input type="submit" value="Leita">
  </form>
  <div>
      <?php foreach ($json_object->results as $value): ?>
        <p id="type">Tegund: <?php echo $value->type ?></p>
        <p id="subType">Undirgerð: <?php echo $value->subType ?></p>
        <p id="registryNumber">Skráningarnr: <?php echo $value->registryNumber ?></p>
        <p id="number">Fastamr: <?php echo $value->number ?></p>
        <p id="factoryNumber">Verksmiðjunr: <?php echo $value->factoryNumber ?></p>
        <p id="registeredAt">Fyrsta skráning: <?php echo $value->registeredAt ?></p>
        <p id="pollution">C0<sub>2</sub> losun: <?php echo $value->pollution ?></p>
        <p id="weight">Eiginþyngd: <?php echo $value->weight ?></p>
        <p id="status">Staða: <?php echo $value->status ?></p>
        <p id="nextcheck">Næsta skoðun: <?php echo $value->nextCheck ?></p>
      <?php endforeach; ?>  
  </div>
   
    <?php
      $sURL = "https://api.cognitive.microsoft.com/bing/v5.0/images/search?q=$year%20$type";
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
      $content = json_decode($content);
      //echo $content;
      //print_r($content);
    ?>  
  <div class="images">
    <?php foreach ($content->value as $cValue): ?>
        <img src="<?php echo $cValue->thumbnailUrl; ?>">
      <?php endforeach; ?> 
  </div>
  <?php } } ?>
</body>
  </html> 


