<?php
if (!session_id()) session_start();
if (!$_SESSION['logon'] = false){ 
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
    <form action="process/signout.php" method="post">
        <input type="submit">
    </form>
</body>
</html>