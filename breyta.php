<?php require('includes/session.php'); ?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php require('includes/header.php'); ?>
    <form action="process/breytanafn.php" method="post"><br>
           Nýtt nafn<br>
        <input type="text" name="newname" required><br>
           Lykilorð<br>
        <input type="password" name="pass_ga" required><br>
        <input value="Accept" type="submit">
    </form>
</body>
</html>