<?php
if (!session_id()) session_start();
if (!$_SESSION['logon']){ 
    header("Location:index.php");
    die();
}//http://www.mustbebuilt.co.uk/php/insert-update-and-delete-with-pdo/
?>
<!DOCTYPE html>
<html lang="">
<?php require('includes/header.php');
  ('includes/head.php'); ?>

<body>
    <form action="process/signout.php" method="post">
        <input type="submit">
    </form>
</body>
</html>