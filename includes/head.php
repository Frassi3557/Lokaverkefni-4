<?php 
  $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
  $icon = "http://www.tskoli.is/skin/basic9k/i/fav-large.png";
  if ($title == 'index') {
    $title = 'Innskráning';
    $icon = "https://cdn3.iconfinder.com/data/icons/glypho-free/64/home-128.png";
  }
  if ($title == 'bilanidurstodur') {
    $title = 'Niðurstöður';
  }
  if ($title == 'bilaleit') {
    $title = 'Leit bifreiða';
  }
  $title = ucfirst($title);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="icon" href="<?= $icon ?>">
    <link rel="stylesheet" href="http://tsuts.tskoli.is/2t/1811992029/onn4/lokaverkefni/style.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Finnur Ip addressu notanda -->
    <script type="text/javascript" src="https://l2.io/ip.js?var=userip"></script>
		<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBe_1vVVeeZoUNAp-1tFIOTcWip1pgH8NM&callback=initMap">
    </script>
</head>
