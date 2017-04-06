<?php
if (!session_id()) session_start();
if (!$_SESSION['logon']){ 
    header("Location:index.php");
    die();
}//http://www.mustbebuilt.co.uk/php/insert-update-and-delete-with-pdo/
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="process/breytanafn.php" method="post"><br>
           Nýtt nafn<br>
        <input type="text" name="newname" required><br>
           Lykilorð<br>
        <input type="password" name="pass_ga" required><br>
        <input value="Accept" type="submit">
    </form>
</body>
</html>