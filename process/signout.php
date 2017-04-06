<?php
if (!session_id()) session_start();
if (!$_SESSION['logon']){
    header("Location:../index.php");
    die();
}
else{ 
session_destroy();
    header("Location:../index.php");
}
?>