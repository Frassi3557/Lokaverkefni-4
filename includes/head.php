<?php 
  $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
  if ($title == 'index') {
    $title = 'home';
  }
  $title = ucfirst($title);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokaverkefni</title>
    <link rel="stylesheet" href="style.css">
</head>